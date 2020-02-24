@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh chương trình khuyến mãi
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
<h1>Hiệu chỉnh chương trình khuyến mãi</h1>
<form method="post" action="{{ route('danhsachctkm.update', ['danhsachctkm' => $ctkm->ctkm_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ctkm_ma">Mã chương trình khuyến mãi</label>
        <input style="width:300px;"type="text" class="form-control" id="ctkm_ma" name="ctkm_ma" value="{{ old('ctkm_ma', $ctkm->ctkm_ma) }}">
    </div>
    <div class="form-group">
        <label for="ctkm_ten">Tên chương trình khuyến mãi</label>
        <input style="width:300px;"type="text" class="form-control" id="ctkm_ten" name="ctkm_ten" value="{{ old('ctkm_ten', $ctkm->ctkm_ten) }}">
    </div>
    <div class="form-group">
        <label for="ctkm_so_luong">Số lượng</label>
        <input style="width:300px;"type="text" class="form-control" id="ctkm_so_luong" name="ctkm_so_luong" value="{{ old('ctkm_so_luong', $ctkm->ctkm_so_luong) }}">
    </div>
    <div class="form-group">
        <label for="ctkm_dien_giai">Diễn giải</label>
        <input style="width:300px;"type="text" class="form-control" id="ctkm_dien_giai" name="ctkm_dien_giai" value="{{ old('ctkm_dien_giai', $ctkm->ctkm_dien_giai) }}">
    </div>
    <div class="form-group">
        <label for="ctkm_tg_bat_dau">Thời gian bắt đầu</label>
        <input style="width:300px;"type="datetime" class="form-control" id="ctkm_tg_bat_dau" name="ctkm_tg_bat_dau" value="{{ old('ctkm_tg_bat_dau', $ctkm->ctkm_tg_bat_dau) }}">
    </div>
    <div class="form-group">
        <label for="ctkm_tg_ket_thuc">Thời gian kết thúc</label>
        <input style="width:300px;"type="datetime" class="form-control" id="ctkm_tg_ket_thuc" name="ctkm_tg_ket_thuc" value="{{ old('ctkm_tg_ket_thuc', $ctkm->ctkm_tg_ket_thuc) }}">
    </div>
    <div class="form-group">
	<label for="id_loai_ctkm">Loại CTKM</label>
	<select style="width:300px;" name="id_loai_ctkm" class="form-control">
            @foreach($danhsachloaictkm as $lctkm)
                @if($lctkm->lctkm_id == $ctkm->id_loai_ctkm)
                <option value="{{ $lctkm->lctkm_id }}" selected>{{ $lctkm->lctkm_ten }}</option>
                @else
                <option value="{{ $lctkm->lctkm_id }}">{{ $lctkm->lctkm_ten }}</option>
                @endif
            @endforeach
	</select>
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