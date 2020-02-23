@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh bộ phận
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
<h1>Hiệu chỉnh bộ phận</h1>
<form method="post" action="{{ route('danhsachbophan.update', ['danhsachbophan' => $bp->bp_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="bp_ten">Tên bộ phận</label>
        <input style="width:300px;"type="text" class="form-control" id="bp_ten" name="bp_ten" value="{{ old('bp_ten', $bp->bp_ten) }}">
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