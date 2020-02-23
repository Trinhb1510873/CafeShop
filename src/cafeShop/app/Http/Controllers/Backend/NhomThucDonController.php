<?php

namespace App\Http\Controllers\Backend;

use App\Bep;
use App\Http\Controllers\Controller;
use App\LoaiMonAn;
use App\NhomThucDon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;
use Validator;

class NhomThucDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_ntd = NhomThucDon::all();
        return view('backend.nhomthucdon.index')
        ->with('danhsachnhomthucdon', $ds_ntd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $ds_loai = LoaiMonAn::all();
        $ds_bep = Bep::all();
        return view('backend.nhomthucdon.create')
                ->with('danhsachloai', $ds_loai)
                ->with('danhsachbep', $ds_bep);
        
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
            'ntd_ten' => 'required|min:3|max:100',
            'ntd_dienGiai' =>'required|min:1|max:1000',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhomthucdon.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ntd = new NhomThucDon();
        $ntd->ntd_ten = $request->ntd_ten;
        $ntd->ntd_dienGiai = $request->ntd_dienGiai;
        $ntd->id_bep = $request->id_bep;
        $ntd->id_loaiMonAn = $request->id_loaiMonAn;
        
        $ntd->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachnhomthucdon.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $ntd  = NhomThucDon::where("ntd_id",  $id)->first();
        $ds_loai = LoaiMonAn::all();
        $ds_bep = Bep::all();
        return view('backend.nhomthucdon.edit')
            ->with('ntd', $ntd)
            ->with('danhsachloai', $ds_loai)
            ->with('danhsachbep', $ds_bep);
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
            'ntd_ten' => 'required|min:3|max:100',
            'ntd_dienGiai' =>'required|min:1|max:1000',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhomthucdon.edit', ['danhsachnhomthucdon' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $ntd  = NhomThucDon::where("ntd_id",  $id)->first();
        $ntd->ntd_ten = $request->ntd_ten;
        $ntd->ntd_dienGiai = $request->ntd_dienGiai;
        $ntd->id_bep = $request->id_bep;
        $ntd->id_loaiMonAn = $request->id_loaiMonAn;
        
        $ntd->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachnhomthucdon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $ntd  = NhomThucDon::where("ntd_id",  $id)->first();
        $ntd->delete();
        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('danhsachnhomthucdon.index');
    }
}
