<?php

namespace App\Http\Controllers\Backend;

use App\ChucVu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class ChucVuController extends Controller
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
        $ds_cv = ChucVu::all();
        return view('backend.chucvu.index')
                ->with('danhsachchucvu',$ds_cv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        if (!auth()->user()->can('danhmuc_them')) {
            return view('error.403');
        }
        return view('backend.chucvu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if (!auth()->user()->can('danhmuc_them')) {
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'cv_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachchucvu.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $cv = new ChucVu();
        $cv->cv_ten = $request->cv_ten;
        $cv->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachchucvu.index');
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
        if (!auth()->user()->can('danhmuc_sua')) {
            return view('error.403');
        }
        $cv = ChucVu::where("cv_id",  $id)->first();
        return view('backend.chucvu.edit')
            ->with('cv', $cv);
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
        if (!auth()->user()->can('danhmuc_sua')) {
            return view('error.403');
        }
        $validator = Validator::make($request->all(), [
            'cv_ten' => 'required|min:3|max:50',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachchucvu.edit', ['danhsachchucvu' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $cv = ChucVu::where("cv_id",  $id)->first();
        $cv->cv_ten = $request->cv_ten;
        $cv->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachchucvu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if (!auth()->user()->can('danhmuc_xoa')) {
            return view('error.403');
        }
        $cv = ChucVu::where("cv_id",  $id)->first();
        $cv->delete();
        Session::flash('alert-info', 'Xóa chức vụ thành công ^^~!!!');
        return redirect()->route('danhsachchucvu.index');
    }
}
