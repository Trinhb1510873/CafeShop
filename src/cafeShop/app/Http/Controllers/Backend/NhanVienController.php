<?php

namespace App\Http\Controllers\Backend;

use App\BoPhan;
use App\ChiNhanh;
use App\ChucVu;
use App\Http\Controllers\Controller;
use App\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Validator;
use function redirect;
use function route;
use function view;

class NhanVienController extends Controller
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
        $ds_nv = NhanVien::all();
        return view('backend.nhanvien.index')
                ->with('danhsachnhanvien',$ds_nv);
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
        $ds_cv = ChucVu::all();
        $ds_bp = BoPhan::all();
        $ds_cn = ChiNhanh::all();
        return view('backend.nhanvien.create')
            ->with('danhsachchucvu',$ds_cv)
            ->with('danhsachbophan',$ds_bp)
            ->with('danhsachchinhanh',$ds_cn);
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
            'nv_hoTen' => 'required|min:3|max:100',
            'nv_ngaySinh' =>'required|date',
            'nv_diaChi' =>'required|min:3|max:100',
            'nv_sdt' =>'required|numeric',
            'nv_email' =>'required|email:rfc,dns',
            'nv_so_cmnd' =>'required|numeric',
            'nv_so_tk_the' =>'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhanvien.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nv = new NhanVien();
        $nv->nv_hoTen = $request->nv_hoTen;
        $nv->nv_ngaySinh = $request->nv_ngaySinh;
        $nv->nv_gioiTinh = $request->nv_gioiTinh;
        $nv->nv_diaChi = $request->nv_diaChi;
        $nv->nv_sdt = $request->nv_sdt;
        $nv->nv_email = $request->nv_email;
        $nv->nv_so_cmnd = $request->nv_so_cmnd;
        $nv->nv_so_tk_the = $request->nv_so_tk_the;
        $nv->nv_trang_thai = $request->nv_trang_thai;
        $nv->id_chuc_vu = $request->id_chuc_vu;
        $nv->id_bo_phan = $request->id_bo_phan;
        $nv->id_chi_nhanh = $request->id_chi_nhanh;
        $nv->save();
        Session::flash('alert-info', 'Them moi thanh cong ^^~!!!');
        return redirect()->route('danhsachnhanvien.index');
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
        $ds_cv = ChucVu::all();
        $ds_bp = BoPhan::all();
        $ds_cn = ChiNhanh::all();   
        $nv = NhanVien::where("nv_id",  $id)->first();
        return view('backend.nhanvien.edit')
            ->with('nv', $nv)
            ->with('danhsachchucvu',$ds_cv)
            ->with('danhsachbophan',$ds_bp)
            ->with('danhsachchinhanh',$ds_cn);
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
            'nv_hoTen' => 'required|min:3|max:100',
            'nv_ngaySinh' =>'required|date',
            'nv_diaChi' =>'required|min:3|max:100',
            'nv_sdt' =>'required|numeric',
            'nv_email' =>'required|email:rfc,dns',
            'nv_so_cmnd' =>'required|numeric',
            'nv_so_tk_the' =>'required|numeric',
        ]);
        if ($validator->fails()) {
            return redirect(route('danhsachnhanvien.edit', ['danhsachnhanvien' => $id]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $nv = NhanVien::where("nv_id",  $id)->first();
        $nv->nv_hoTen = $request->nv_hoTen;
        $nv->nv_ngaySinh = $request->nv_ngaySinh;
        $nv->nv_gioiTinh = $request->nv_gioiTinh;
        $nv->nv_diaChi = $request->nv_diaChi;
        $nv->nv_sdt = $request->nv_sdt;
        $nv->nv_email = $request->nv_email;
        $nv->nv_so_cmnd = $request->nv_so_cmnd;
        $nv->nv_so_tk_the = $request->nv_so_tk_the;
        $nv->nv_trang_thai = $request->nv_trang_thai;
        $nv->id_chuc_vu = $request->id_chuc_vu;
        $nv->id_bo_phan = $request->id_bo_phan;
        $nv->id_chi_nhanh = $request->id_chi_nhanh;
        $nv->save();
        Session::flash('alert-info', 'Cập nhật thanh cong ^^~!!!');
        return redirect()->route('danhsachnhanvien.index');
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
        $nv = NhanVien::where("nv_id",  $id)->first();
        $nv->delete();
        Session::flash('alert-info', 'Xóa Nhân viên thành công ^^~!!!');
        return redirect()->route('danhsachnhanvien.index');
    }
}
