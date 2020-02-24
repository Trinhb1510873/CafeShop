@extends('backend.layouts.master')

@section('title')
Thêm mới nguyên vật liệu
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

<h1>Thêm mới nguyên vật liệu</h1>
<br>

<form method="post" action="{{ route('danhsachnvl.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nvl_ten">Tên nguyên vật liệu</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_ten" name="nvl_ten" value="{{ old('nvl_ten') }}">
    </div>
    <div class="form-group">
        <label for="nvl_tinhChat">Tính chất</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_tinhChat" name="nvl_tinhChat" value="{{ old('nvl_tinhChat') }}">
    </div>
    <div class="form-group">
        <label for="nvl_soLuong">Số lượng</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_soLuong" name="nvl_soLuong" value="{{ old('nvl_soLuong') }}">
    </div>
    <div class="form-group">
        <label for="id_don_vi_tinh">Đơn vị tính</label>
        <select style="width:300px;" name="id_don_vi_tinh" class="form-control">
            @foreach($danhsachdvt as $dvt)
                @if(old('id_don_vi_tinh') == $dvt->dvt_id)
                <option value="{{ $dvt->dvt_id }}" selected>{{ $dvt->dvt_ten }}</option>
                @else
                <option value="{{ $dvt->dvt_id }}">{{ $dvt->dvt_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
	<label for="id_kho">Kho</label>
	<select style="width:300px;" name="id_kho" class="form-control">
            @foreach($danhsachkho as $kho)
                @if(old('id_kho') == $kho->k_id)
                <option value="{{ $kho->k_id }}" selected>{{ $kho->k_ten }}</option>
                @else
                <option value="{{ $kho->k_id }}">{{ $kho->k_ten }}</option>
                @endif
            @endforeach
	</select>
    </div>
    <div class="form-group">
	<label for="id_nhom_nvl">Nhóm nguyên vật liệu</label>
	<select style="width:300px;" name="id_nhom_nvl" class="form-control">
            @foreach($danhsachnhomnvl as $nnvl)
                @if(old('id_nhom_nvl') == $nnvl->nnvl_id)
                <option value="{{ $nnvl->nnvl_id }}" selected>{{ $nnvl->nnvl_ten }}</option>
                @else
                <option value="{{ $nnvl->nnvl_id }}">{{ $nnvl->nnvl_ten }}</option>
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