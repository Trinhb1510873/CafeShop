<?php

namespace App\Http\Controllers\Backend;

use App\ChuongTrinhKhuyenMai;
use App\Http\Controllers\Controller;
use App\LoaiCTKM;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class ChuongTrinhKhuyenMaiController extends Controller
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
        if (!auth()->user()->can('danhmuc_xem')) {
            return view('error.403');
        }
        $ds_ctkm = ChuongTrinhKhuyenMai::all();
        return view('backend.ctkm.index')
                ->with('danhsachctkm',$ds_ctkm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (!auth()->user()->can('danhmuc_them')) {
            return view('error.403');
        }
        $ds_lctkm = LoaiCTKM::all();
        return view('backend.ctkm.create')
            ->with('danhsachloaictkm', $ds_lctkm);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('danhmuc_them')) {
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'ctkm_ten' => 'required|min:3|max:100',
            'ctkm_ma' => 'required|min:3|max:100',
            'ctkm_so_luong' => 'required|numeric',
            'ctkm_dien_giai' => 'required|min:3|max:500',
            'ctkm_tg_bat_dau' => 'required|date',
            'ctkm_tg_ket_thuc' => 'required|date',
            
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachctkm.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ctkm = new ChuongTrinhKhuyenMai();
        $ctkm->ctkm_ma = $request->ctkm_ma;
        $ctkm->ctkm_ten = $request->ctkm_ten;
        $ctkm->ctkm_so_luong = $request->ctkm_so_luong;
        $ctkm->ctkm_dien_giai = $request->ctkm_dien_giai;
        $ctkm->ctkm_tg_bat_dau = $request->ctkm_tg_bat_dau;
        $ctkm->ctkm_tg_ket_thuc = $request->ctkm_tg_ket_thuc;
        $ctkm->id_loai_ctkm = $request->id_loai_ctkm;
        $ctkm->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachctkm.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if (!auth()->user()->can('danhmuc_sua')) {
            return view('error.403');
        }
        
        $ds_lctkm = LoaiCTKM::all();
        $ctkm = ChuongTrinhKhuyenMai::where("ctkm_id",  $id)->first();
        return view('backend.ctkm.edit')
            ->with('ctkm', $ctkm)
            ->with('danhsachloaictkm', $ds_lctkm);
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
        if (!auth()->user()->can('danhmuc_sua')) {
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'ctkm_ten' => 'required|min:3|max:100',
            'ctkm_ma' => 'required|min:3|max:100',
            'ctkm_so_luong' => 'required|numeric',
            'ctkm_dien_giai' => 'required|min:3|max:500',
            'ctkm_tg_bat_dau' => 'required|date',
            'ctkm_tg_ket_thuc' => 'required|date',
            
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachctkm.edit', ['danhsachctkm' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ctkm = ChuongTrinhKhuyenMai::where("ctkm_id",  $id)->first();
        $ctkm->ctkm_ten = $request->ctkm_ten;
        $ctkm->ctkm_ma = $request->ctkm_ma;
        $ctkm->ctkm_ten = $request->ctkm_ten;
        $ctkm->ctkm_so_luong = $request->ctkm_so_luong;
        $ctkm->ctkm_dien_giai = $request->ctkm_dien_giai;
        $ctkm->ctkm_tg_bat_dau = $request->ctkm_tg_bat_dau;
        $ctkm->ctkm_tg_ket_thuc = $request->ctkm_tg_ket_thuc;
        $ctkm->id_loai_ctkm = $request->id_loai_ctkm;
        $ctkm->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachctkm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('danhmuc_xoa')) {
            return view('error.403');
        }
        $ctkm = ChuongTrinhKhuyenMai::where("ctkm_id",  $id)->first();
        $ctkm->delete();
        Session::flash('alert-info', 'Xóa chương trình khuyến mãi thành công ^^~!!!');
        return redirect()->route('danhsachctkm.index');
    }
}
