<?php

namespace App\Http\Controllers\Backend;

use App\DonViTinh;
use App\Http\Controllers\Controller;
use App\Kho;
use App\NguyenVatLieu;
use App\NhomNVL;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class NguyenVatLieuController extends Controller
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
        $ds_nvl = NguyenVatLieu::all();
        return view('backend.nvl.index')
                ->with('danhsachnvl',$ds_nvl);
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
        $ds_nnvl = NhomNVL::all();
        $ds_kho = Kho::all();
        $ds_dvt = DonViTinh::all();
        return view('backend.nvl.create')
            ->with('danhsachnhomnvl',$ds_nnvl)
            ->with('danhsachkho',$ds_kho)
            ->with('danhsachdvt',$ds_dvt);
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
            'nvl_ten' => 'required|min:3|max:100',
            'nvl_tinhChat' => 'required|min:3|max:100',
            'nvl_soLuong' => 'required|numeric  ',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnvl.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nvl = new NguyenVatLieu();
        $nvl->nvl_ten = $request->nvl_ten;
        $nvl->nvl_tinhChat = $request->nvl_tinhChat;
        $nvl->nvl_soLuong = $request->nvl_soLuong;
        $nvl->id_don_vi_tinh = $request->id_don_vi_tinh;
        $nvl->id_kho = $request->id_kho;
        $nvl->id_nhom_nvl = $request->id_nhom_nvl;
        $nvl->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachnvl.index');
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
        $ds_nnvl = NhomNVL::all();
        $ds_kho = Kho::all();
        $ds_dvt = DonViTinh::all();
        $nvl = NguyenVatLieu::where("nvl_id",  $id)->first();
        return view('backend.nvl.edit')
            ->with('nvl', $nvl)
            ->with('danhsachnhomnvl',$ds_nnvl)
            ->with('danhsachkho',$ds_kho)
            ->with('danhsachdvt',$ds_dvt);
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
            'nvl_ten' => 'required|min:3|max:100',
            'nvl_tinhChat' => 'required|min:3|max:100',
            'nvl_soLuong' => 'required|numeric  ',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnvl.edit', ['danhsachnvl' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nvl = NguyenVatLieu::where("nvl_id",  $id)->first();
        $nvl->nvl_ten = $request->nvl_ten;
        $nvl->nvl_tinhChat = $request->nvl_tinhChat;
        $nvl->nvl_soLuong = $request->nvl_soLuong;
        $nvl->id_don_vi_tinh = $request->id_don_vi_tinh;
        $nvl->id_kho = $request->id_kho;
        $nvl->id_nhom_nvl = $request->id_nhom_nvl;
        $nvl->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachnvl.index');
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
        $nvl = NguyenVatLieu::where("nvl_id",  $id)->first();
        $nvl->delete();
        Session::flash('alert-info', 'Xóa nguyên vật liệu thành công ^^~!!!');
        return redirect()->route('danhsachnvl.index');
    }
}
