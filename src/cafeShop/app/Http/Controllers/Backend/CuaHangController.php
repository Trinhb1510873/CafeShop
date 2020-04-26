<?php

namespace App\Http\Controllers\Backend;

use App\CuaHang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class CuaHangController extends Controller
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
        if(!auth()->user()->can('danhmuc_xem')){
            return view('error.403');
        }
        $ds_ch = CuaHang::all();
        return view('backend.cuahang.index')
                ->with('danhsachcuahang',$ds_ch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(!auth()->user()->can('danhmuc_them')){
            return view('error.403');
        }
         return view('backend.cuahang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('danhmuc_them')){
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'ch_ten' => 'required|min:3|max:100',
            'ch_tenNguoiDaiDien' =>'required|min:3|max:100',
            'ch_diaChi' =>'required|min:3|max:100',
            'ch_soDienThoai' =>'required|numeric',
            'ch_maSoThue' =>'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachcuahang.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ch = new CuaHang();
        $ch->ch_ten = $request->ch_ten;
        $ch->ch_tenNguoiDaiDien = $request->ch_tenNguoiDaiDien;
        $ch->ch_diaChi = $request->ch_diaChi;
        $ch->ch_soDienThoai = $request->ch_soDienThoai;
        $ch->ch_maSoThue = $request->ch_maSoThue;
        $ch->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachcuahang.index');
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
        if(!auth()->user()->can('danhmuc_sua')){
            return view('error.403');
        }
        $ch = CuaHang::where("ch_id",  $id)->first();
        return view('backend.cuahang.edit')
            ->with('ch', $ch);
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
        if(!auth()->user()->can('danhmuc_sua')){
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'ch_ten' => 'required|min:3|max:100',
            'ch_tenNguoiDaiDien' =>'required|min:3|max:100',
            'ch_diaChi' =>'required|min:3|max:100',
            'ch_soDienThoai' =>'required|numeric',
            'ch_maSoThue' =>'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachcuahang.edit', ['danhsachcuahang' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ch = CuaHang::where("ch_id",  $id)->first();
        $ch->ch_ten = $request->ch_ten;
        $ch->ch_tenNguoiDaiDien = $request->ch_tenNguoiDaiDien;
        $ch->ch_diaChi = $request->ch_diaChi;
        $ch->ch_soDienThoai = $request->ch_soDienThoai;
        $ch->ch_maSoThue = $request->ch_maSoThue;
        $ch->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachcuahang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->can('danhmuc_xoa')){
            return view('error.403');
        }
        $ch = CuaHang::where("ch_id",  $id)->first();
        $ch->delete();
        Session::flash('alert-info', 'Xóa cửa hàng thành công ^^~!!!');
        return redirect()->route('danhsachcuahang.index');
    }
}
