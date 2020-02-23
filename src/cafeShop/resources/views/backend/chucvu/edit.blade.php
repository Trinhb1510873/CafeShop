@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh chức vụ
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
<h1>Hiệu chỉnh chức vụ</h1>
<form method="post" action="{{ route('danhsachchucvu.update', ['danhsachchucvu' => $cv->cv_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="cv_ten">Tên chức vụ</label>
        <input style="width:300px;"type="text" class="form-control" id="cv_ten" name="cv_ten" value="{{ old('cv_ten', $cv->cv_ten) }}">
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