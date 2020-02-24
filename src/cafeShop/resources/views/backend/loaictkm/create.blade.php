@extends('backend.layouts.master')

@section('title')
Thêm mới loại chương trình khuyến mãi
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

<h1>Thêm mới loại chương trình khuyến mãi</h1>
<br>

<form method="post" action="{{ route('danhsachloaictkm.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="lctkm_ten">Tên loại chương trình khuyến mãi</label>
        <input style="width:300px;"type="text" class="form-control" id="lctkm_ten" name="lctkm_ten" value="{{ old('lctkm_ten') }}">
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