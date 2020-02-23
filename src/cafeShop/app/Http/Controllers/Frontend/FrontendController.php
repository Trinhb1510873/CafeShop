<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\LoaiMonAn;
use App\Mail\ContactMailer;
use App\MonAn;
use App\NhomThucDon;
use DB;
use Illuminate\Http\Request;
use Mail;
use function view;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $ds_top3_newest_loai = DB::table('mst_loai_mon_an')
            ->join('mst_nhom_thuc_don', 'mst_loai_mon_an.lma_id', '=', 'mst_nhom_thuc_don.id_loaiMonAn')
            ->join('mst_mon_an', 'mst_nhom_thuc_don.ntd_id', '=', 'mst_mon_an.id_nhom_thuc_don')
            ->orderBy('lma_ten')->take(3)->get();
        
        $danhsachmonan = $this->searchMonAn($request);
        $danhsachhinhanhlienquan = DB::table('mst_hinh_anh')
                            ->whereIn('id_mon_an', $danhsachmonan->pluck('id_mon_an')->toArray())
                            ->get();
        $danhsachloai = LoaiMonAn::all();
        $danhsachnhomthucdon = NhomThucDon::all();
        return view('frontend.index')
            ->with('ds_top3_newest_loai', $ds_top3_newest_loai)
            ->with('danhsachmonan', $danhsachmonan)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachnhomthucdo', $danhsachnhomthucdon)
            ->with('danhsachloai', $danhsachloai);
    }
    private function searchMonAn(Request $request)
    {
        $query = DB::table('mst_mon_an')->select('*');
        $data = $query->get();
        return $data;
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function sendMailContactForm(Request $request)
    {
        $input = $request->all();
        Mail::to('trinh0963594847@gmail.com')->send(new ContactMailer($input));
        return $input;
    }
    public function product(Request $request){
        $danhsachsanpham = $this->searchMonAn($request);
        $danhsachhinhanhlienquan = DB::table('mst_hinh_anh')
                            ->whereIn('id_mon_an', $danhsachsanpham->pluck('id_mon_an')->toArray())
                            ->get();
        $danhsachloai = LoaiMonAn::all();
        $danhsachnhomthucdon = NhomThucDon::all();
        return view('frontend.pages.product')
            ->with('danhsachsanpham', $danhsachsanpham)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachnhomthucdo', $danhsachnhomthucdon)
            ->with('danhsachloai', $danhsachloai);
    }
    public function productDetail(Request $request, $id)
    {
        $sanpham = MonAn::find($id);
        $danhsachhinhanhlienquan = DB::table('mst_hinh_anh')
                                ->where('id_mon_an', $id)
                                ->get();
        $danhsachloai = LoaiMonAn::all();
        $danhsachnhomthucdon = NhomThucDon::all();
        return view('frontend.pages.product-detail')
            ->with('sp', $sanpham)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('danhsachmau', $danhsachmau)
            ->with('danhsachnhomthucdo', $danhsachnhomthucdon)
            ->with('danhsachloai', $danhsachloai);
    }
    public function cart(Request $request)
    {
        return view('frontend.pages.shopping-cart');
    }
}
