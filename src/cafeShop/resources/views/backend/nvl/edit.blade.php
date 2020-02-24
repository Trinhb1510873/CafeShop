@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh nguyên vật liệu
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
<h1>Hiệu chỉnh nguyên vật liệu</h1>
<form method="post" action="{{ route('danhsachnvl.update', ['danhsachnvl' => $nvl->nvl_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nvl_ten">Tên nguyên vật liệu</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_ten" name="nvl_ten" value="{{ old('nvl_ten', $nvl->nvl_ten) }}">
    </div>
    <div class="form-group">
        <label for="nvl_tinhChat">Tính chất</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_tinhChat" name="nvl_tinhChat" value="{{ old('nvl_tinhChat', $nvl->nvl_tinhChat) }}">
    </div>
    <div class="form-group">
        <label for="nvl_soLuong">Số lượng</label>
        <input style="width:300px;"type="text" class="form-control" id="nvl_soLuong" name="nvl_soLuong" value="{{ old('nvl_soLuong', $nvl->nvl_soLuong) }}">
    </div>
    <div class="form-group">
        <label for="id_don_vi_tinh">Đơn vị tính</label>
        <select style="width:300px;" name="id_don_vi_tinh" class="form-control">
            @foreach($danhsachdvt as $dvt)
                @if($dvt->dvt_id == $nvl->id_don_vi_tinh)
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
                @if($kho->k_id == $nvl->id_kho)
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
                @if($nnvl->nnvl_id == $nvl->id_nhom_nvl)
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