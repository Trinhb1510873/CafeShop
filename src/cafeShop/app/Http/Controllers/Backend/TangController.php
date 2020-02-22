<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Tang;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;

class TangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_tang = Tang::all();
        return view('backend.tang.index')
                ->with('danhsachtang',$ds_tang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       return view('backend.tang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $t = new Tang();
        $t->t_ten = $request->t_ten;
        $t->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachtang.index');
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
        $t = Tang::where("t_id",  $id)->first();
        return view('backend.tang.edit')
            ->with('t', $t);
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
        $t = Tang::where("t_id",  $id)->first();
        $t->t_ten = $request->t_ten;
        $t->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachtang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $t = Tang::where("t_id",  $id)->first();
        $t->delete();
        Session::flash('alert-info', 'Xóa tầng thành công ^^~!!!');
        return redirect()->route('danhsachtang.index');
    }
}
