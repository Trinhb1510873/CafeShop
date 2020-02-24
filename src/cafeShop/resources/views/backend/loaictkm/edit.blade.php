@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh loại chương trình khuyến mãi
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
<h1>Hiệu chỉnh loại chương trình khuyến mãi</h1>
<form method="post" action="{{ route('danhsachloaictkm.update', ['danhsachloaictkm' => $lctkm->lctkm_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="lctkm_ten">Tên loại chương trình khuyến mãi</label>
        <input style="width:300px;"type="text" class="form-control" id="lctkm_ten" name="lctkm_ten" value="{{ old('lctkm_ten', $lctkm->lctkm_ten) }}">
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