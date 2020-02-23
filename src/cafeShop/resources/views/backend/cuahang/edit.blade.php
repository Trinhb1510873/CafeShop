@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh cửa hàng
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
<h1>Hiệu chỉnh cửa hàng</h1>
<form method="post" action="{{ route('danhsachcuahang.update', ['danhsachcuahang' => $ch->ch_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ch_ten">Tên cửa hàng</label>
        <input style="width:300px;"type="text" class="form-control" id="ch_ten" name="ch_ten" value="{{ old('ch_ten', $ch->ch_ten) }}">
    </div>
    <div class="form-group">
        <label for="ch_tenNguoiDaiDien">Tên người đại diện</label>
        <input style="width:300px;"type="text" class="form-control" id="ch_tenNguoiDaiDien" name="ch_tenNguoiDaiDien" value="{{ old('ch_tenNguoiDaiDien', $ch->ch_tenNguoiDaiDien) }}">
    </div>
    <div class="form-group">
        <label for="ch_diaChi">Địa chỉ</label>
        <input style="width:300px;"type="text" class="form-control" id="ch_diaChi" name="ch_diaChi" value="{{ old('ch_diaChi', $ch->ch_diaChi) }}">
    </div><div class="form-group">
        <label for="ch_soDienThoai">Số điện thoại</label>
        <input style="width:300px;"type="text" class="form-control" id="ch_soDienThoai" name="ch_soDienThoai" value="{{ old('ch_soDienThoai', $ch->ch_soDienThoai) }}">
    </div>
    <div class="form-group">
        <label for="ch_maSoThue">Mã số thuế</label>
        <input style="width:300px;"type="text" class="form-control" id="ch_maSoThue" name="ch_maSoThue" value="{{ old('ch_maSoThue', $ch->ch_maSoThue) }}">
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