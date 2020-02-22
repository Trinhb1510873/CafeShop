<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\LoaiMonAn;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $ds_top3_newest_loai = DB::table('mst_loai_mon_an')
            ->join('mst_nhom_thuc_don', 'mst_loai_mon_an.lma_id', '=', 'mst_nhom_thuc_don.id_loaiMonAn')
            ->join('mst_mon_an', 'mst_nhom_thuc_don.ntd_id', '=', 'mst_mon_an.id_nhom_thuc_don')
            ->orderBy('lma_ten')->take(3)->get();
        
        $danhsachmonan = $this->searchMonAn($request);
        
        return view('frontend.index')
            ->with('ds_top3_newest_loai', $ds_top3_newest_loai)
            ->with('danhsachmonan', $danhsachmonan);
    }
    private function searchMonAn(Request $request)
    {
        $query = DB::table('mst_mon_an')->select('*');
        $data = $query->get();
        return $data;
    }
}
