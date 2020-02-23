@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh nhân viên
@endsection

@section('custom-css')

@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Hiệu chỉnh nhân viên</h1>
<form method="post" action="{{ route('danhsachnhanvien.update', ['danhsachnhanvien' => $nv->nv_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nv_hoTen">Tên nhân viên</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_hoTen" name="nv_hoTen" value="{{ old('nv_hoTen', $nv->nv_hoTen) }}">
    </div>
    <div class="form-group">
        <label for="nv_ngaySinh">Ngày tháng năm sinh</label>
        <input style="width:300px;"type="date" class="form-control" id="nv_ngaySinh" name="nv_ngaySinh" value="{{ old('nv_ngaySinh', $nv->nv_ngaySinh) }}">
    </div>
    <div class="form-group">
        <label for="nv_gioiTinh">Giới tính</label>
        <select style="width:300px;"name="nv_gioiTinh" class="form-control">
            <option value="1" {{ old('nv_gioiTinh', $nv->nv_gioiTinh) == 1 ? "selected" : "" }}>Nam</option>
            <option value="2" {{ old('nv_gioiTinh', $nv->nv_gioiTinh) == 2 ? "selected" : "" }}>Nữ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nv_diaChi">Địa chỉ</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_diaChi" name="nv_diaChi" value="{{ old('nv_diaChi', $nv->nv_diaChi) }}">
    </div>
    <div class="form-group">
        <label for="nv_sdt">Số điện thoại</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_sdt" name="nv_sdt" value="{{ old('nv_sdt', $nv->nv_sdt) }}">
    </div>
    <div class="form-group">
        <label for="nv_email">Email</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email', $nv->nv_email) }}">
    </div>
    <div class="form-group">
        <label for="nv_so_cmnd">Số CMND</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_so_cmnd" name="nv_so_cmnd" value="{{ old('nv_so_cmnd', $nv->nv_so_cmnd) }}">
    </div>
    <div class="form-group">
        <label for="nv_so_tk_the">Số tài khoản thẻ</label>
        <input style="width:300px;"type="text" class="form-control" id="nv_so_tk_the" name="nv_so_tk_the" value="{{ old('nv_so_tk_the', $nv->nv_so_tk_the) }}">
    </div>
    <div class="form-group">
        <label for="nv_trang_thai">Trạng thái</label>
        <select style="width:300px;" name="nv_trang_thai" class="form-control">
            <option value="1" {{ old('nv_trang_thai', $nv->nv_trang_thai) == 1 ? "selected" : "" }}>Đang làm việc</option>
            <option value="2" {{ old('nv_trang_thai', $nv->nv_trang_thai) == 2 ? "selected" : "" }}>Đã nghỉ</option>
        </select>
    </div>
    <div class="form-group">
        <label for="id_chuc_vu">Chức vụ</label>
        <select style="width:300px;" name="id_chuc_vu" class="form-control">
            @foreach($danhsachchucvu as $cv)
                @if($cv->cv_id == $nv->id_chuc_vu)
                <option value="{{ $cv->cv_id }}" selected>{{ $cv->cv_ten }}</option>
                @else
                <option value="{{ $cv->cv_id }}">{{ $cv->cv_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
	<label for="id_bo_phan">Bộ phận</label>
	<select style="width:300px;" name="id_bo_phan" class="form-control">
            @foreach($danhsachbophan as $bp)
                @if($bp->bp_id == $nv->id_bo_phan)
                <option value="{{ $bp->bp_id }}" selected>{{ $bp->bp_ten }}</option>
                @else
                <option value="{{ $bp->bp_id }}">{{ $bp->bp_ten }}</option>
                @endif
            @endforeach
	</select>
    </div>
    <div class="form-group">
	<label for="id_chi_nhanh">Chi nhánh</label>
	<select style="width:300px;" name="id_chi_nhanh" class="form-control">
            @foreach($danhsachchinhanh as $cn)
                @if($cn->cn_id == $nv->id_chi_nhanh)
                <option value="{{ $cn->cn_id }}" selected>{{ $cn->cn_ten }}</option>
                @else
                <option value="{{ $cn->cn_id }}">{{ $cn->cn_ten }}</option>
                @endif
            @endforeach
	</select>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
</form>
@endsection

@section('custom-scripts')
<script>
$(document).ready(function(){
    
});
</script>

@endsection