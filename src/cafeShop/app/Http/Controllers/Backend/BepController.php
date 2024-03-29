<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Bep;
use Validator;


class BepController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!auth()->user()->can('danhmuc_xem')){
            return view('error.403');
        }
        $ds_loai = Bep::all();
        return view('backend.bep.index')
                ->with('danhsachbep',$ds_loai);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->can('danhmuc_them')){
            return view('error.403');
        }
        return view('backend.bep.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!auth()->user()->can('danhmuc_them')){
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'b_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachbep.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $b = new Bep();
        $b->b_ten = $request->b_ten;
        $b->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachbep.index');
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
        if(!auth()->user()->can('danhmuc_sua')){
            return view('error.403');
        }
        $b = Bep::where("b_id",  $id)->first();
        return view('backend.bep.edit')
            ->with('b', $b);
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
        if(!auth()->user()->can('danhmuc_sua')){
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'b_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachbep.edit', ['danhsachbep' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $b = Bep::where("b_id",  $id)->first();
        $b->b_ten = $request->b_ten;
        $b->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachbep.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!auth()->user()->can('danhmuc_xoa')){
            return view('error.403');
        }
        $b = Bep::where("b_id",  $id)->first();
        $b->delete();
        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('danhsachbep.index');
    }
}
