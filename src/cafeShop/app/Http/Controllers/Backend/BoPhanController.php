<?php

namespace App\Http\Controllers\Backend;

use App\BoPhan;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use function redirect;
use function route;
use function view;

class BoPhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ds_bp = BoPhan::all();
        return view('backend.bophan.index')
                ->with('danhsachbophan',$ds_bp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.bophan.create');
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
            'bp_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachbophan.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $bp = new BoPhan();
        $bp->bp_ten = $request->bp_ten;
        $bp->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachbophan.index');
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
        $bp = BoPhan::where("bp_id",  $id)->first();
        return view('backend.bophan.edit')
            ->with('bp', $bp);
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
            'bp_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachbophan.edit', ['danhsachbophan' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $bp = BoPhan::where("bp_id",  $id)->first();
        $bp->bp_ten = $request->bp_ten;
        $bp->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachbophan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $bp = BoPhan::where("bp_id",  $id)->first();
        $bp->delete();
        Session::flash('alert-info', 'Xóa bộ phận thành công ^^~!!!');
        return redirect()->route('danhsachbophan.index');
    }
}
