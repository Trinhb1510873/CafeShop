@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh nhóm nguyên vật liệu
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
<h1>Hiệu chỉnh nhóm nguyên vật liệu</h1>
<form method="post" action="{{ route('danhsachnhomnvl.update', ['danhsachnhomnvl' => $nhomnvl->nnvl_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nnvl_ten">Tên nhóm nguyên vật liệu</label>
        <input style="width:300px;"type="text" class="form-control" id="nnvl_ten" name="nnvl_ten" value="{{ old('nnvl_ten', $nhomnvl->nnvl_ten) }}">
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