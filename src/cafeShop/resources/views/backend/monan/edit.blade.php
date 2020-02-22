@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh món ăn
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
<h1>Hiệu chỉnh món ăn</h1>
<form method="post" action="{{ route('danhsachmonan.update', ['danhsachmonan' => $ma->ma_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ma_ten">Tên món ăn</label>
        <input style="width:300px;"type="text" class="form-control" id="ma_ten" name="ma_ten" value="{{ old('ma_ten', $ma->ma_ten) }}">
    </div> 
    <div class="form-group">
        <label for="id_nhom_thuc_don">Nhóm thực đơn</label>
        <select style="width:300px;" name="id_nhom_thuc_don" class="form-control">
            @foreach($danhsachntd as $ntd)
                @if($ntd->ntd_id == $ma->id_nhom_thuc_don)
                <option value="{{ $ntd->ntd_id }}" selected>{{ $ntd->ntd_ten }}</option>
                @else
                <option value="{{ $ntd->ntd_id }}">{{ $ntd->ntd_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_don_vi_tinh">Đơn vị tính</label>
        <select style="width:300px;" name="id_don_vi_tinh" class="form-control">
            @foreach($danhsachdvt as $dvt)
                @if($dvt->dvt_id == $ma->id_don_vi_tinh )
                <option value="{{ $dvt->dvt_id }}" selected>{{ $dvt->dvt_ten }}</option>
                @else
                <option value="{{ $dvt->dvt_id }}">{{ $dvt->dvt_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ma_dienGiai">Diễn giải</label>
        <input type="text" class="form-control" id="ma_dienGiai" name="ma_dienGiai" value="{{ old('ma_dienGiai', $ma->ma_dienGiai) }}">
    </div>

    <div class="form-group">
        <label for="ma_giaBan">Giá bán</label>
        <input type="text" class="form-control" id="ma_giaBan" name="ma_giaBan" value="{{ old('ma_giaBan', $ma->ma_giaBan) }}">
    </div>
    <div class="form-group">
        <label for="ma_giaVon">Giá vốn</label>
        <input type="text" class="form-control" id="ma_giaVon" name="ma_giaVon" value="{{ old('ma_giaVon', $ma->ma_giaVon) }}">
    </div>
    <div class="form-group">
        <label for="ma_mon_dac_trung">Món đặc trưng</label>
        <select name="ma_mon_dac_trung" class="form-control">
            <option value="1" {{old('ma_mon_dac_trung', $ma->ma_mon_dac_trung) == 1 ? "selected" : "" }}>Đặc trưng</option>
            <option value="2" {{old('ma_mon_dac_trung', $ma->ma_mon_dac_trung) == 2 ? "selected" : "" }}>Không đặc trưng</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ma_thay_doi_theo_thoi_gia">Thay đổi theo thời giá</label>
        <select name="ma_thay_doi_theo_thoi_gia" class="form-control">
            <option value="1" {{old('ma_thay_doi_theo_thoi_gia', $ma->ma_thay_doi_theo_thoi_gia) == 1 ? "selected" : "" }}>Không</option>
            <option value="2" {{old('ma_thay_doi_theo_thoi_gia', $ma->ma_thay_doi_theo_thoi_gia) == 2 ? "selected" : "" }}>Có</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ma_ngung_ban">Ngừng bán</label>
        <select name=" ma_ngung_ban" class="form-control">
            <option value="1" {{old('ma_ngung_ban', $ma->ma_ngung_ban) == 1 ? "selected" : "" }}>Không</option>
            <option value="2" {{old('ma_ngung_ban', $ma->ma_ngung_ban) == 2 ? "selected" : "" }}>Có</option>
        </select>
    </div>
    <div class="form-group">
         <label>Hình đại diện</label>
        <div class="file-loading">
            <input id="ma_hinh" type="file" name="ma_hinh">
        </div>
    </div>
    <div class="form-group">
        <label>Hình ảnh liên quan sản phẩm</label>
        <div class="file-loading"> 
            <input id="ma_hinhanhlienquan" type="file" name="ma_hinhanhlienquan[]" multiple="multiple">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
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
            append: false,
            showRemove: false,
            autoReplace: true,
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false,
            initialPreviewShowDelete: false,
            initialPreviewAsData: true,
            initialPreview: [
                "{{ asset('storage/photos/' . $ma->ma_hinh) }}"
            ],
            initialPreviewConfig: [
                {
                    caption: "{{ $ma->ma_hinh }}", 
                    size: {{ Storage::exists('public/photos/' . $ma->ma_hinh) ? Storage::size('public/photos/' . $ma->ma_hinh) : 0 }}, 
                    width: "120px", 
                    url: "{$url}", 
                    key: 1
                },
            ]
        });

        $("#ma_hinhanhlienquan").fileinput({
            theme: 'fas',
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any",
            append: false,
            showRemove: false,
            autoReplace: true,
            previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
            overwriteInitial: false,
            allowedFileExtensions: ["jpg", "gif", "png", "txt"],
            initialPreviewShowDelete: false,
            initialPreviewAsData: true,
            initialPreview: [
                @foreach($ma->hinhAnh()->get() as $hinhAnh)
                "{{ asset('storage/photos/' . $hinhAnh->ha_ten) }}",
                @endforeach
            ],
            initialPreviewConfig: [
                @foreach($ma->hinhAnh()->get() as $index=>$hinhAnh)
                {
                    caption: "{{ $hinhAnh->ha_ten }}", 
                    size: {{ Storage::exists('public/photos/' . $hinhAnh->ha_ten) ? Storage::size('public/photos/' . $hinhAnh->ha_ten) : 0 }}, 
                    width: "120px", 
                    url: "{$url}", 
                    key: {{ ($index + 1) }}
                },
                @endforeach
            ]
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