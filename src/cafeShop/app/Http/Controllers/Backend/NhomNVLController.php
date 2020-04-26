<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\NhomNVL;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class NhomNVLController extends Controller
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
        $ds_nhomnvl = NhomNVL::all();
        return view('backend.nhomnvl.index')
        ->with('danhsachnhomnvl',$ds_nhomnvl);
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
        return view('backend.nhomnvl.create');
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
            'nnvl_ten' => 'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhomnvl.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nhomnvl = new NhomNVL();
        $nhomnvl->nnvl_ten = $request->nnvl_ten;
        $nhomnvl->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachnhomnvl.index');
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
        $nhomnvl = NhomNVL::where("nnvl_id",  $id)->first();
        return view('backend.nhomnvl.edit')
            ->with('nhomnvl', $nhomnvl);
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
            'nnvl_ten' => 'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhomnvl.edit', ['danhsachnhomnvl' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nhomnvl = NhomNVL::where("nnvl_id",  $id)->first();
        $nhomnvl->nnvl_ten = $request->nnvl_ten;
        $nhomnvl->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachnhomnvl.index');
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
        $nhomnvl = NhomNVL::where("nnvl_id",  $id)->first();
        $nhomnvl->delete();
        Session::flash('alert-info', 'Xóa Nhóm nguyên vật liệu thành công ^^~!!!');
        return redirect()->route('danhsachnhomnvl.index');
    }
}
