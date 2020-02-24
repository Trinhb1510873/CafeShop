<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Kho;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_k = Kho::all();
        return view('backend.kho.index')
                ->with('danhsachkho',$ds_k);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.kho.create');
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
            'k_ten' => 'required|min:3|max:50',
            'k_diaChi' =>'required|min:3|max:200',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachkho.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $kho = new Kho();
        $kho->k_ten = $request->k_ten;
        $kho->k_diaChi = $request->k_diaChi;
        $kho->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachkho.index');
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
        $kho = Kho::where("k_id",  $id)->first();
        return view('backend.kho.edit')
            ->with('kho', $kho);
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
            'k_ten' => 'required|min:3|max:50',
            'k_diaChi' =>'required|min:3|max:200',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachkho.edit', ['danhsachkho' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $kho = Kho::where("k_id",  $id)->first();
        $kho->k_ten = $request->k_ten;
        $kho->k_diaChi = $request->k_diaChi;
        $kho->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachkho.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $kho = Kho::where("k_id",  $id)->first();
        $kho->delete();
        Session::flash('alert-info', 'Xóa kho thành công ^^~!!!');
        return redirect()->route('danhsachkho.index');
    }
}
