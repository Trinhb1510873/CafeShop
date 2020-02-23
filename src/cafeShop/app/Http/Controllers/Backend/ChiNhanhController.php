<?php

namespace App\Http\Controllers\Backend;

use App\ChiNhanh;
use App\CuaHang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class ChiNhanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_cn = ChiNhanh::all();
        return view('backend.chinhanh.index')
                ->with('danhsachchinhanh',$ds_cn);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $ds_ch = CuaHang::all();
        return view('backend.chinhanh.create')
            ->with('danhsachcuahang',$ds_ch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cn_ten' => 'required|min:3|max:100',
            'cn_diachi' =>'required|min:3|max:100',
            'cn_soDienThoai' =>'required|numeric',
            'longitude' =>'required|numeric',
            'latitude' =>'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachchinhanh.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $cn = new ChiNhanh();
        $cn->cn_ten = $request->cn_ten;
        $cn->cn_diachi = $request->cn_diachi;
        $cn->cn_soDienThoai = $request->cn_soDienThoai;
        $cn->id_cuaHang = $request->id_cuaHang;
        $cn->longitude = $request->longitude;
        $cn->latitude = $request->latitude;
        $cn->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachchinhanh.index');
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
        $ds_ch = CuaHang::all();
        $cn = ChiNhanh::where("cn_id",  $id)->first();
        return view('backend.chinhanh.edit')
            ->with('cn', $cn)
            ->with('danhsachcuahang',$ds_ch);
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
        $validator = Validator::make($request->all(), [
            'cn_ten' => 'required|min:3|max:100',
            'cn_diachi' =>'required|min:3|max:100',
            'cn_soDienThoai' =>'required|numeric',
            'longitude' =>'required|numeric',
            'latitude' =>'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachchinhanh.edit', ['danhsachchinhanh' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $cn = ChiNhanh::where("cn_id",  $id)->first();
        $cn->cn_ten = $request->cn_ten;
        $cn->cn_diachi = $request->cn_diachi;
        $cn->cn_soDienThoai = $request->cn_soDienThoai;
        $cn->id_cuaHang = $request->id_cuaHang;
        $cn->longitude = $request->longitude;
        $cn->latitude = $request->latitude;
        $cn->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachchinhanh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $cn = ChiNhanh::where("cn_id",  $id)->first();
        $cn->delete();
        Session::flash('alert-info', 'Xóa chi nhánh thành công ^^~!!!');
        return redirect()->route('danhsachchinhanh.index');
    }
}
