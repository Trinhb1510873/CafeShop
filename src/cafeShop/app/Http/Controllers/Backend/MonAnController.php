<?php

namespace App\Http\Controllers\Backend;

use App\DonViTinh;
use App\HinhAnh;
use App\Http\Controllers\Controller;
use App\MonAn;
use App\NhomThucDon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function redirect;
use function view;
use Validator;
use App\Exports\SanPhamExport;
use Maatwebsite\Excel\Facades\Excel as Excel;

class MonAnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_monan = MonAn::all();
        return view('backend.monan.index')
            ->with('danhsachmonan', $ds_monan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $ds_ntd = NhomThucDon::all();
        $ds_dvt = DonViTinh::all();
        return view('backend.monan.create')
                ->with('danhsachntd', $ds_ntd)
                ->with('danhsachdvt', $ds_dvt);
               
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'ma_hinh' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'ma_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $validator = Validator::make($request->all(), [
            'ma_ten' => 'required|min:3|max:50',
            'ma_dienGiai' => 'required|min:3|max:1000',
            'ma_giaBan' => 'required|numeric',
            'ma_giaVon' => 'required|numeric',
            
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachmonan.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ma = new MonAn();
        $ma->ma_ten = $request->ma_ten;
        $ma->ma_dienGiai = $request->ma_dienGiai;
        $ma->ma_giaBan = $request->ma_giaBan;
        $ma->ma_giaVon = $request->ma_giaVon;
        $ma->ma_mon_dac_trung = $request->ma_mon_dac_trung;
        $ma->ma_thay_doi_theo_thoi_gia = $request->ma_thay_doi_theo_thoi_gia;
        $ma->ma_ngung_ban = $request->ma_ngung_ban;
        $ma->id_don_vi_tinh = $request->id_don_vi_tinh;
        $ma->id_nhom_thuc_don = $request->id_nhom_thuc_don;
        if ($request->hasFile('ma_hinh')) {
            $file = $request->ma_hinh;
            $ma->ma_hinh = $file->getClientOriginalName();
            $fileSaved = $file->storeAs('public/photos', $ma->ma_hinh);
        }
        $ma->save();
        if($request->hasFile('ma_hinhanhlienquan')) {
            $files = $request->ma_hinhanhlienquan;
            foreach ($request->ma_hinhanhlienquan as $index => $file) {
                $file->storeAs('public/photos', $file->getClientOriginalName());
                $hinhAnh = new HinhAnh();
                $hinhAnh->id_mon_an = $ma->ma_id;
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachmonan.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $ma = MonAn::where("ma_id",  $id)->first();
//        print_r($ma);die;
        return view('backend.monan.show')
                ->with('ma', $ma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $ma = MonAn::where("ma_id",  $id)->first();
        $ds_ntd = NhomThucDon::all();
        $ds_dvt = DonViTinh::all();
        return view('backend.monan.edit')
                ->with('ma', $ma)
                ->with('danhsachntd', $ds_ntd)
                ->with('danhsachdvt', $ds_dvt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'ma_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'ma_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $validator = Validator::make($request->all(), [
            'ma_ten' => 'required|min:3|max:50',
            'ma_dienGiai' => 'required|min:3|max:1000',
            'ma_giaBan' => 'required|numeric',
            'ma_giaVon' => 'required|numeric',
            
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachmonan.edit', ['danhsachmonan' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ma = MonAn::where("ma_id",  $id)->first();
        $ma->ma_ten = $request->ma_ten;
        $ma->ma_dienGiai = $request->ma_dienGiai;
        $ma->ma_giaBan = $request->ma_giaBan;
        $ma->ma_giaVon = $request->ma_giaVon;
        $ma->ma_mon_dac_trung = $request->ma_mon_dac_trung;
        $ma->ma_thay_doi_theo_thoi_gia = $request->ma_thay_doi_theo_thoi_gia;
        $ma->ma_ngung_ban = $request->ma_ngung_ban;
        $ma->id_don_vi_tinh = $request->id_don_vi_tinh;
        $ma->id_nhom_thuc_don = $request->id_nhom_thuc_don;
        
        if($request->hasFile('ma_hinh')){
            Storage::delete('public/photos/' . $ma->ma_hinh);
            $file = $request->ma_hinh;
            $ma->ma_hinh = $file->getClientOriginalName();
            $fileSaved = $file->storeAs('public/photos', $ma->ma_hinh);
        }
        if($request->hasFile('ma_hinhanhlienquan')){
            foreach($ma->hinhAnh()->get() as $hinhAnh){
                Storage::delete('public/photos/' . $hinhAnh->ha_ten);
                $hinhAnh->delete(); 
            }
            $files = $request->ma_hinhanhlienquan;
            foreach ($request->ma_hinhanhlienquan as $index => $file){
                $file->storeAs('public/photos', $file->getClientOriginalName());
                // Tạo đối tưọng HinhAnh
                $hinhAnh = new HinhAnh();
                $hinhAnh->id_mon_an = $ma->ma_id;
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }
        $ma->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachmonan.index');
        
    }
    public function prints()
    {
        $ds_monan = MonAn::all();
        $ds_ntd = NhomThucDon::all();
        $ds_dvt = DonViTinh::all();
        return view('backend.monan.print')
                ->with('danhsachmonan', $ds_monan)
                ->with('danhsachntd', $ds_ntd)
                ->with('danhsachdvt', $ds_dvt);
    }
    public function excel() 
    {
        /* Code dành cho việc debug
    - Khi debug cần hiển thị view để xem trước khi Export Excel
    */
    // $ds_sanpham = Sanpham::all();
    // $ds_loai    = Loai::all();
    // return view('sanpham.excel')
    //     ->with('danhsachsanpham', $ds_sanpham)
    //     ->with('danhsachloai', $ds_loai);
        return Excel::download(new SanPhamExport, 'danhsachmonan.xlsx');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $ma = MonAn::where("ma_id",  $id)->first();
        if(empty($ma) == false)
        {
            // DELETE các dòng liên quan trong table `HinhAnh`
            foreach($ma->hinhAnh()->get() as $hinhAnh)
            {
                // Xóa hình cũ để tránh rác
                Storage::delete('public/photos/' . $hinhAnh->ha_ten);
                // Xóa record
                $hinhAnh->delete();
            }
            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $ma->ma_hinh);
        }
        $ma->delete();
        Session::flash('alert-info', 'Xóa món ăn thành công ^^~!!!');
        return redirect()->route('danhsachmonan.index');

    }
}
