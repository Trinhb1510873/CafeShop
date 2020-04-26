<?php

namespace App\Http\Controllers;

use App\Ban;
use App\ChiTietHoaDon;
use App\HoaDon;
use App\NhanVien;
use App\UserNhanVien;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function auth;
use function Complex\abs;
use function redirect;
use function view;

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $ds_tang = DB::select('SELECT t_id, t_ten FROM `mst_tang`');
        $data_arr_tang = array();
        foreach ($ds_tang as $val) {
            $ds_ban= DB::select('SELECT * FROM `mst_ban` WHERE id_tang = ?', array($val->t_id));
            $data_arr_tang[] = array(
                't_id'      => $val->t_id,
                't_ten'     => $val->t_ten,
                'ds_ban'    => $ds_ban
            );
        }
        $ds_ntd = DB::select('SELECT ntd_id, ntd_ten FROM `mst_nhom_thuc_don`');
        $data_arr_ntd = array();
        
        foreach ($ds_ntd as $val) {
            $ma = DB::select('SELECT ma_id, ma_ten, ma_giaBan, ma_hinh, id_don_vi_tinh FROM `mst_mon_an` WHERE ma_ngung_ban = "1" AND id_nhom_thuc_don = ?', array($val->ntd_id));
            $data_arr_ntd[] = array(
                'ntd_id'    => $val->ntd_id,
                'ntd_ten'   => $val->ntd_ten,
                'ds_ma'    => $ma
            );
        }
        return view('order.index')
                        ->with('data_arr_tang', $data_arr_tang)
                        ->with('data_arr_ntd', $data_arr_ntd);
    }

    public function store(Request $request)
    {
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $idUser = auth()->id();
        $idNhanVien = UserNhanVien::where('id_user', $idUser)
                ->select('id_nhan_vien')->first();
        
        $idChiNhanh = NhanVien::where('nv_id', $idNhanVien['id_nhan_vien'])
                ->select('id_chi_nhanh')
                ->first();
        $success = false;
        $data = null;
        $toTal = null;
        $error = null;
        //set timezone
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        //bàn được chọn
        $idBan = $request->ban_id;
        //món ăn được chọn
        $idMonAn = $request->ma_id;
        //số lượng món ăn
        $soLuong = $request->so_luong;
        //giá
        $giaMon = $request->gia_mon;
        
        $date = date('Y-m-d H:i:s');
        
        //kiểm tra xem hóa đơn đã được tạo chưa
        $select = HoaDon::where('hd_trang_thai', HoaDon::HD_TRANG_THAI_CHUA_THANH_TOAN)
                    ->where('id_ban', $idBan)
                    ->first();
        if (!$select) {
            if ($soLuong <= 0) {
                $error = "Vui lòng nhập số lượng lớn hơn 0! ";
                return $error;
            } else {
                //tạo hóa đơn
                $hd = new HoaDon();
                $hd->hd_ten = "HD_" . $idBan . '_' . $date;
                $hd->hd_tong_tien = $giaMon * $soLuong;
                $hd->hd_tong_tien_phai_tra = $hd->hd_tong_tien;
                $hd->id_nhan_vien = $idNhanVien['id_nhan_vien'];
                $hd->id_ban = $idBan;
                $hd->id_chi_nhanh = $idChiNhanh['id_chi_nhanh'];
                $hd->save();

                //tạo chi tiết hóa đơn
                $cthd = new ChiTietHoaDon();
                $cthd->id_hoa_don = $hd->hd_id;
                $cthd->id_mon_an = $idMonAn;
                $cthd->cthd_sl_mon_an = $soLuong;
                $cthd->save();

                //cập nhật trạng thái bàn
                $ban = Ban::where('ban_id', $idBan)->first();
                $ban->ban_trangThai = Ban::BAN_TRANG_THAI_CO_KHACH;
                $ban->save();
            }
            
            
        }
        //nếu đã có hóa đơn
        else {
            //kiểm tra trong hóa đơn đã có món vừa chọn hay chưa
            $idHoaDon = $select->hd_id;
            $hoaDon = HoaDon::where('hd_id', $idHoaDon)->first();
            $chiTietHoaDon = ChiTietHoaDon::where('id_hoa_don',$idHoaDon)
                    ->where('id_mon_an', $idMonAn)
                    ->first();
            //nếu có món ăn
            if($chiTietHoaDon){
                //so luong nho hon 0
                if($soLuong <= 0){
                    $so_luong = abs($soLuong);
                    //trị tuyệt đối >= sl hiện tại
                    if($so_luong >= $chiTietHoaDon->cthd_sl_mon_an){
                        //xoa mon an trong chi tiet hoa don
                        $chiTietHoaDon->delete();
                        //cap nhat lai tong tien
                        $hoaDon->hd_tong_tien = $hoaDon->hd_tong_tien - ($chiTietHoaDon->cthd_sl_mon_an * $giaMon) ;
                        $hoaDon->hd_tong_tien_phai_tra = $hoaDon->hd_tong_tien;
                        $hoaDon->save();
                        
                        $toTal = array(
                            'tong_tien' => $hoaDon->hd_tong_tien,
                            'tong_tien_phai_tra' => $hoaDon->hd_tong_tien_phai_tra
                        );
                        $success = true;
                    }
                    //trị tuyệt đối < sô lượng hiện tại thì trừ bớt
                    else {
                        $this->updateHoaDon($chiTietHoaDon, $hoaDon, $soLuong, $giaMon);
                    }
                }
                //so luong lơn hon 0
                else {
                    $this->updateHoaDon($chiTietHoaDon, $hoaDon, $soLuong, $giaMon);
                }
            }
            //nếu chưa
            else {
                if($soLuong <= 0){
                    $error = "Vui lòng nhập số lượng lớn hơn 0! ";
                    return $error;
                } else {
                    //Tạo chi tiết hóa đơn mới cho món ăn vừa chọn
                    $cthd = new ChiTietHoaDon();
                    $cthd->id_hoa_don = $idHoaDon;
                    $cthd->id_mon_an = $idMonAn;
                    $cthd->cthd_sl_mon_an = $soLuong;
                    $cthd->save();

                    //cập nhật lại tổng tiền trong hóa đơn
                    $hoaDon->hd_tong_tien = $hoaDon->hd_tong_tien + ($giaMon * $soLuong);
                    $hoaDon->hd_tong_tien_phai_tra = $hoaDon->hd_tong_tien;
                    $hoaDon->save();
                }
                
            }
        }
        $hoaDons = $this->getChiTietHoaDon($idBan);
        if ($hoaDons) {
            $data = $hoaDons['hoaDon'];
            $toTal = $hoaDons['toTal'];
            $success = true;
        }
        
        return array(
            'success'   => $success,
            'hoaDon'    => $data,
            'toTal'     => $toTal,
            'error'     => $error
        );
    }
    

    public function getHoaDon(Request $request) {
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $data = null;
        $toTal = null;
        $success = false;
        $idBan = $request->get('ban_id');
        $hoaDon = $this->getChiTietHoaDon($idBan);
        if ($hoaDon) {
            $data = $hoaDon['hoaDon'];
            $toTal = $hoaDon['toTal'];
            $success = true;
        }
        return array(
            'success' => $success,
            'hoaDon' => $data,
            'toTal' => $toTal
        );
        
    }
    
    private function getChiTietHoaDon($idBan) {
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $respones = null;
        $hoaDon = HoaDon::where('hd_trang_thai', HoaDon::HD_TRANG_THAI_CHUA_THANH_TOAN)
                ->join('mst_chi_tiet_hoa_don', 'mst_chi_tiet_hoa_don.id_hoa_don', '=', 'mst_hoa_don.hd_id')
                ->join('mst_mon_an', 'mst_mon_an.ma_id', '=', 'mst_chi_tiet_hoa_don.id_mon_an')
                ->join('mst_ban', 'mst_ban.ban_id', '=', 'mst_hoa_don.id_ban')
                ->select('mst_chi_tiet_hoa_don.cthd_sl_mon_an', 'mst_mon_an.ma_ten', 'mst_mon_an.ma_giaBan', 'mst_hoa_don.hd_tong_tien', 'mst_hoa_don.hd_tong_tien_phai_tra', 'mst_hoa_don.id_ban', 'mst_ban.ban_trangThai')
                ->where('id_ban', $idBan)
                ->get();
        if ($hoaDon->count() > 0) {
            foreach ($hoaDon as $val) {
                $data[] = array(
                    'ma_ten' => $val['ma_ten'],
                    'ma_giaBan' => number_format($val['ma_giaBan']),
                    'cthd_sl_mon_an' => $val['cthd_sl_mon_an'],
                    'thanh_tien' => $val['ma_giaBan'] * $val['cthd_sl_mon_an'],
                );
                $toTal = array(
                    'ban' => $val['id_ban'],
                    'ban_trangThai' => $val['ban_trangThai'],
                    'tong_tien' => $val['hd_tong_tien'],
                    'tong_tien_phai_tra' => $val['hd_tong_tien_phai_tra']
                );
            }
            $respones = array(
                'hoaDon'  => $data,
                'toTal'  => $toTal
            );
        }
        return $respones;
    }
    
    private function updateHoaDon($chiTietHoaDon, $hoaDon, $soLuong, $giaMon){
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $date = date('Y-m-d H:i:s');
        //cập nhật số lượng món ăn lên
        $chiTietHoaDon->cthd_sl_mon_an = $chiTietHoaDon->cthd_sl_mon_an + $soLuong;
        $chiTietHoaDon->updated_at = $date;
        $chiTietHoaDon->save();

        //cập nhật lại tổng tiền trong hóa đơn
        $hoaDon->hd_tong_tien = $hoaDon->hd_tong_tien + ($giaMon * $soLuong);
        $hoaDon->hd_tong_tien_phai_tra = $hoaDon->hd_tong_tien;
        $hoaDon->save();
    }
    
    public function prints(Request $request)
    {
        if(!auth()->user()->can('order')){
            return view('error.403');
        }
        $hoaDon = array();
        $idBan = $request->get('ban_id');
        $giamGia = $request->get('giam_gia')/100;
        $hDon = HoaDon::where('hd_trang_thai', HoaDon::HD_TRANG_THAI_CHUA_THANH_TOAN)
                ->join('mst_chi_tiet_hoa_don', 'mst_chi_tiet_hoa_don.id_hoa_don', '=', 'mst_hoa_don.hd_id')
                ->join('mst_mon_an', 'mst_mon_an.ma_id', '=', 'mst_chi_tiet_hoa_don.id_mon_an')
                ->join('mst_ban', 'mst_ban.ban_id', '=', 'mst_hoa_don.id_ban')
                ->join('mst_tang', 'mst_tang.t_id', '=', 'mst_ban.id_tang')
                ->join('mst_nhan_vien', 'mst_nhan_vien.nv_id', '=', 'mst_hoa_don.id_nhan_vien' )
                ->select('mst_chi_tiet_hoa_don.cthd_sl_mon_an', 'mst_mon_an.ma_ten', 'mst_mon_an.ma_giaBan', 'mst_hoa_don.hd_tong_tien', 'mst_hoa_don.hd_tong_tien_phai_tra', 'mst_hoa_don.id_ban', 'mst_hoa_don.hd_id','mst_hoa_don.hd_tg_vao', 'mst_ban.ban_trangThai','mst_nhan_vien.nv_hoTen','mst_tang.t_ten')
                ->where('id_ban', $idBan)
                ->where('nv_trang_thai', NhanVien::TRANG_THAI_LAM)
                ->get();
        if($hDon->count() > 0 ) {
            foreach ($hDon as $val) {
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $tgian_ra = date('Y-m-d H:i:s');
                $chiTietHD[] = array(
                    'ma_ten' => $val['ma_ten'],
                    'ma_giaBan' => number_format($val['ma_giaBan']),
                    'sl_mon_an' => $val['cthd_sl_mon_an'],
                    'thanh_tien' => $val['ma_giaBan'] * $val['cthd_sl_mon_an'],
                );
                $hoaDon = array(
                    'hoaDonId' => $val['hd_id'],
                    'tgian_vao' => $val['hd_tg_vao'],
                    'tang' => $val['t_ten'],
                    'ban' => $val['id_ban'],
                    'ban_trangThai' => $val['ban_trangThai'],
                    'nhan_vien' => $val['nv_hoTen'],
                    'tong_tien' => $val['hd_tong_tien'],
                    'tong_tien_phai_tra' => $val['hd_tong_tien_phai_tra'] - ($val['hd_tong_tien_phai_tra'] * $giamGia)
                );
            }
            //cập nhật lại trạng thái bàn có khách->trống
            $ban = Ban::where('ban_id', $idBan)->first();
            $ban->ban_trangThai = Ban::BAN_TRANG_THAI_TRONG;
            $ban->save();
            //cập nhật trạng thái hóa đơn: chưa thanh toán -> đã thanh toán, tgian thanh toán
            $hd = HoaDon::where('hd_id', $hoaDon['hoaDonId'])->first();
            $hd->hd_trang_thai = HoaDon::HD_TRANG_THAI_DA_THANH_TOAN;
            $hd->hd_tg_ra = $tgian_ra;
            $hd->save();
            return view('order.print')
                        ->with('chiTietHD', $chiTietHD)
                        ->with('hoaDon', $hoaDon)
                        ->with('tgian_ra', $tgian_ra)
                        ->with('giam_gia', $request->get('giam_gia'));
        }
        return redirect()->route('order.index');
    }

}
