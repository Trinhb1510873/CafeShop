@extends('backend.layouts.master')

@section('title')
Thêm mới nhóm nguyên vật liệu
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

<h1>Thêm mới nhóm nguyên vật liệu</h1>
<br>

<form method="post" action="{{ route('danhsachnhomnvl.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nnvl_ten">Tên nhóm nguyên vật liệu</label>
        <input style="width:300px;"type="text" class="form-control" id="nnvl_ten" name="nnvl_ten" value="{{ old('nnvl_ten') }}">
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