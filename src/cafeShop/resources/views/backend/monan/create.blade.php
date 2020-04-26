@extends('backend.layouts.master')

@section('title')
Thêm mới món ăn
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
<style>
    .form-control{
        width:500px;
    }
</style>
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
<h1>Danh Sách Món Ăn</h1>
<br>
<form method="post" action="{{ route('danhsachmonan.store') }}" enctype="multipart/form-data">
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <br><br>
    {{ csrf_field() }}
    <div class="form-group">
        <label for="">Nhóm thực đơn</label>
        <select name="id_nhom_thuc_don" class="form-control">
            @foreach($danhsachntd as $ntd)
                @if(old('id_nhom_thuc_don') == $ntd->ntd_id)
                <option value="{{ $ntd->ntd_id }}" selected>{{ $ntd->ntd_ten }}</option>
                @else
                <option value="{{ $ntd->ntd_id }}">{{ $ntd->ntd_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nhóm thực đơn</label>
        <select name="id_don_vi_tinh" class="form-control">
            @foreach($danhsachdvt as $dvt)
                @if(old('id_nhom_thuc_don') == $dvt->dvt_id)
                <option value="{{ $dvt->dvt_id }}" selected>{{ $dvt->dvt_ten }}</option>
                @else
                <option value="{{ $dvt->dvt_id }}">{{ $dvt->dvt_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ma_ten">Tên món ăn</label>
        <input type="text" class="form-control" id="ma_ten" name="ma_ten" value="{{ old('ma_ten') }}">
    </div>
    <div class="form-group">
        <label for="ma_dienGiai">Diễn giải</label>
        <textarea rows="5" cols="20" class="form-control" id="ma_dienGiai" name="ma_dienGiai" value="{{ old('ma_dienGiai') }}"></textarea>
    </div>

    <div class="form-group">
        <label for="ma_giaBan">Giá bán</label>
        <input type="text" class="form-control" id="ma_giaBan" name="ma_giaBan" value="{{ old('ma_giaBan') }}">
    </div>
    <div class="form-group">
        <label for="ma_giaVon">Giá vốn</label>
        <input type="text" class="form-control" id="ma_giaVon" name="ma_giaVon" value="{{ old('ma_giaVon') }}">
    </div>
    <div class="form-group">
        <label for="ma_mon_dac_trung">Món đặc trưng</label>
        <select name="ma_mon_dac_trung" class="form-control">
            <option value="1" {{old('ma_mon_dac_trung') == 1 ? "selected" : "" }}>Đặc trưng</option>
            <option value="2" {{old('ma_mon_dac_trung') == 2 ? "selected" : "" }}>Không đặc trưng</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ma_thay_doi_theo_thoi_gia">Thay đổi theo thời giá</label>
        <select name="ma_thay_doi_theo_thoi_gia" class="form-control">
            <option value="1" {{old('ma_thay_doi_theo_thoi_gia') == 1 ? "selected" : "" }}>Không</option>
            <option value="2" {{old('ma_thay_doi_theo_thoi_gia') == 2 ? "selected" : "" }}>Có</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ma_ngung_ban">Ngừng bán</label>
        <select name=" ma_ngung_ban" class="form-control">
            <option value="1" {{old('ma_ngung_ban') == 1 ? "selected" : "" }}>Không</option>
            <option value="2" {{old('ma_ngung_ban') == 2 ? "selected" : "" }}>Có</option>
        </select>
    </div>
    <div class="form-group">
         <label>Hình đại diện</label>
        <div class="file-loading">
            <input id="ma_hinh" type="file" name="ma_hinh" value="{{ old('ma_hinh') }}">
        </div>
    </div>
    <div class="form-group">
        <label>Hình ảnh liên quan sản phẩm</label>
        <div class="file-loading"> 
            <input id="ma_hinhanhlienquan" type="file" name="ma_hinhanhlienquan[]" multiple value="{{ old('ma_hinhanhlienquan') }}">
        </div>
    </div>
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $("#ma_hinh").fileinput({
            theme: 'fas',
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false
        });

        $("#ma_hinhanhlienquan").fileinput({
            theme: 'fas',
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false,
            allowedFileExtensions: ["jpg", "gif", "png", "txt"]
        });
    });
</script>

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection