<?php

namespace App\Http\Controllers\Backend;

use App\Ban;
use App\Http\Controllers\Controller;
use App\Tang;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use function redirect;
use function view;
use Validator;

class BanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_ban = Ban::all();
        return view('backend.ban.index')
            ->with('danhsachban', $ds_ban);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $ds_tang = Tang::all();
        return view('backend.ban.create')
            ->with('danhsachtang', $ds_tang);
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
            'ban_ten' => 'required|min:3|max:100',
            'ban_soLuong' => 'required|digits:1',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachban.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $b = new Ban();
        $b->ban_ten = $request->ban_ten;
        $b->ban_trangThai = $request->ban_trangThai;
        $b->ban_soLuong = $request->ban_soLuong;
        $b->id_tang = $request->id_tang;
        $b->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachban.index');
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
        $b = Ban::where("ban_id", $id)->first();
        $ds_tang = Tang::all();
        return view('backend.ban.edit')
            ->with('b', $b)
            ->with('danhsachtang', $ds_tang);
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
            'ban_ten' => 'required|min:3|max:100',
            'ban_soLuong' => 'required|digits:1',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachban.edit', ['danhsachban' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $b = Ban::where("ban_id", $id)->first();
        $b->ban_ten = $request->ban_ten;
        $b->ban_trangThai = $request->ban_trangThai;
        $b->ban_soLuong = $request->ban_soLuong;
        $b->id_tang = $request->id_tang;
        $b->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachban.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $b = Ban::where("ban_id", $id)->first();
        $$b->delete();
        Session::flash('alert-info', 'Xóa bàn thành công ^^~!!!');
        return redirect()->route('danhsachban.index');
    }
}
