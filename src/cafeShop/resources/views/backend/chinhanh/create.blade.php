@extends('backend.layouts.master')

@section('title')
Thêm mới chi nhánh
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

<h1>Thêm mới chi nhánh</h1>
<br>

<form method="post" action="{{ route('danhsachchinhanh.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="cn_ten">Tên chi nhánh</label>
        <input style="width:300px;"type="text" class="form-control" id="cn_ten" name="cn_ten" value="{{ old('cn_ten') }}">
    </div>
    <div class="form-group">
        <label for="cn_diachi">Địa chỉ</label>
        <input style="width:300px;"type="text" class="form-control" id="cn_diachi" name="cn_diachi" value="{{ old('cn_diachi') }}">
    </div>
    <div class="form-group">
        <label for="cn_soDienThoai">Số điện thoại</label>
        <input style="width:300px;"type="text" class="form-control" id="cn_soDienThoai" name="cn_soDienThoai" value="{{ old('cn_soDienThoai') }}">
    </div>
    <div class="form-group">
        <label for="longitude">Longitude</label>
        <input style="width:300px;"type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude') }}">
    </div>
    <div class="form-group">
        <label for="latitude">Latitude</label>
        <input style="width:300px;"type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}">
    </div>
    <div class="form-group">
        <label for="id_cuaHang">Cửa hàng</label>
        <select style="width:300px;" name="id_cuaHang" class="form-control">
            @foreach($danhsachcuahang as $ch)
                @if(old('id_cuaHang') == $ch->ch_id)
                <option value="{{ $ch->ch_id }}" selected>{{ $ch->ch_ten }}</option>
                @else
                <option value="{{ $ch->ch_id }}">{{ $ch->ch_ten }}</option>
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