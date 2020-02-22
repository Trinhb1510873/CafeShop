@extends('backend.layouts.master')

@section('title')
Thêm mới tầng
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

<h1>Thêm mới tầng</h1>
<br>

<form method="post" action="{{ route('danhsachtang.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="t_ten">Tên tầng</label>
        <input style="width:300px;"type="text" class="form-control" id="t_ten" name="t_ten" value="{{ old('t_ten') }}">
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