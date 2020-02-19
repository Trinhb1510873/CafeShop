@extends('backend.layouts.master')

@section('title')
Thêm mới nhóm thực đơn
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
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

<h1>Thêm mới nhóm thực đơn</h1>
<br>

<form method="post" action="{{ route('danhsachnhomthucdon.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ntd_ten">Tên nhóm thực đơn</label>
        <input placeholder="Mời nhập tên nhóm thực đơn" style="width:300px;"type="text" class="form-control" id="ntd_ten" name="ntd_ten" value="{{ old('ntd_ten') }}">
    </div>
    <div class="form-group">
        <label for="ntd_dienGiai">Diễn giải</label>
        <input placeholder="Mời nhập diễn giải" style="width:300px;"type="text" class="form-control" id="ntd_dienGiai" name="ntd_dienGiai" value="{{ old('ntd_dienGiai') }}">
    </div>
    <div class="form-group">
        <label for="id_bep">Bếp</label>
        <select style="width:300px;" name="id_bep" class="form-control">
            @foreach($danhsachbep as $bep)
                @if(old('id_bep') == $bep->b_id)
                <option value="{{ $bep->b_id }}" selected>{{ $bep->b_ten }}</option>
                @else
                <option value="{{ $bep->b_id }}">{{ $bep->b_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_loaiMonAn">Loại món ăn</label>
        <select style="width:300px;" name="id_loaiMonAn" class="form-control">
            @foreach($danhsachloai as $loai)
                @if(old('id_loaiMonAn') == $loai->lma_id)
                <option value="{{ $loai->lma_id }}" selected>{{ $loai->lma_ten }}</option>
                @else
                <option value="{{ $loai->lma_id }}">{{ $loai->lma_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
</form>
@endsection

@section('custom-scripts')

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection