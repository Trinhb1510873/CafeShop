<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\LoaiMonAn;
class LoaiMonAnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_loai = LoaiMonAn::all();
        return view('backend.loaimonan.index')
                ->with('danhsachloaimonan',$ds_loai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.loaimonan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lma_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachloaimonan.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $lma = new LoaiMonAn();
        $lma->lma_ten = $request->lma_ten;
        $lma->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachloaimonan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lma = LoaiMonAn::where("lma_id",  $id)->first();
        return view('backend.loaimonan.edit')
            ->with('lma', $lma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'lma_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachloaimonan.edit', ['danhsachloaimonan' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $lma = LoaiMonAn::where("lma_id",  $id)->first();
        $lma->lma_ten = $request->lma_ten;
        $lma->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachloaimonan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lma = LoaiMonAn::where("lma_id",  $id)->first();
        $lma->delete();
        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('danhsachloaimonan.index');
    }
}
