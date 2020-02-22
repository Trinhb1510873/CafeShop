@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh bàn
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
<h1>Hiệu chỉnh bàn</h1>
<form method="post" action="{{ route('danhsachban.update', ['danhsachban' => $b->ban_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ban_ten">Tên bàn</label>
        <input style="width:300px;"type="text" class="form-control" id="ban_ten" name="ban_ten" value="{{ old('ban_ten', $b->ban_ten) }}">
    </div>
    <div class="form-group">
        <label for="ban_trangThai">Trạng thái</label>
        <select style="width:300px;" name="ban_trangThai" class="form-control">
            <option value="1" {{ old('ban_trangThai', $b->ban_trangThai) == 1 ? "selected" : "" }}>Trống</option>
            <option value="2" {{ old('ban_trangThai', $b->ban_trangThai) == 2 ? "selected" : "" }}>Có khách</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ban_soLuong">Số lượng</label>
        <input style="width:300px;"type="text" class="form-control" id="ban_soLuong" name="ban_soLuong" value="{{ old('ban_soLuong', $b->ban_soLuong) }}">
    </div> 
    <div class="form-group">
        <label for="id_tang">Tầng</label>
        <select style="width:300px;" name="id_tang" class="form-control">
            @foreach($danhsachtang as $tang)
                @if($tang->t_id == $b->id_tang)
                <option value="{{ $tang->t_id }}" selected>{{ $tang->t_ten }}</option>
                @else
                <option value="{{ $tang->t_id }}">{{ $tang->t_ten }}</option>
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