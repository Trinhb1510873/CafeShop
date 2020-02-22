@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh tầng
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
<h1>Hiệu chỉnh tầng</h1>
<form method="post" action="{{ route('danhsachban.update', ['danhsachban' => $t->ban_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="t_ten">Tên tầng</label>
        <input style="width:300px;"type="text" class="form-control" id="t_ten" name="t_ten" value="{{ old('t_ten', $t->t_ten) }}">
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