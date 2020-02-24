<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\LoaiCTKM;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class LoaiCTKMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_lctkm = LoaiCTKM::all();
        return view('backend.loaictkm.index')
                ->with('danhsachloaictkm',$ds_lctkm);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.loaictkm.create');
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
            'lctkm_ten' => 'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachloaictkm.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $lctkm = new LoaiCTKM();
        $lctkm->lctkm_ten = $request->lctkm_ten;
        $lctkm->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachloaictkm.index');
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
        $lctkm = LoaiCTKM::where("lctkm_id",  $id)->first();
        return view('backend.loaictkm.edit')
            ->with('lctkm', $lctkm);
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
            'lctkm_ten' => 'required|min:3|max:100',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachloaictkm.edit', ['danhsachloaictkm' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $lctkm = LoaiCTKM::where("lctkm_id",  $id)->first();
        $lctkm->lctkm_ten = $request->lctkm_ten;
        $lctkm->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachloaictkm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $lctkm = LoaiCTKM::where("lctkm_id",  $id)->first();
        $lctkm->delete();
        Session::flash('alert-info', 'Xóa loại chương trình khuyến mãi thành công ^^~!!!');
        return redirect()->route('danhsachloaictkm.index');
    }
}
