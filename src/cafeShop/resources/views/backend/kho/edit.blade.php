@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh kho
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
<h1>Hiệu chỉnh kho</h1>
<form method="post" action="{{ route('danhsachchucvu.update', ['danhsachchucvu' => $cv->cv_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="k_ten">Tên kho</label>
        <input style="width:300px;"type="text" class="form-control" id="k_ten" name="k_ten" value="{{ old('k_ten', $kho->k_ten) }}">
    </div>
    <div class="form-group">
        <label for="k_diaChi">Địa chỉ</label>
        <input style="width:300px;"type="text" class="form-control" id="k_diaChi" name="k_diaChi" value="{{ old('k_diaChi', $kho->k_diaChi) }}">
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