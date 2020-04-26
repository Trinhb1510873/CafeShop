@extends('frontend.layouts.master')
@section('title')
Danh sách sản phẩm Coffee Sunflower
@endsection

@section('custom-css')
@endsection

@section('main-content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('themes/cozastore/images/bg-01.jpg') }}');">
    <h2 class="ltext-105 cl0 txt-center" style="color: red">
        Sản Phẩm 
    </h2>
</section>
@include('frontend.widgets.product-list', [$data = $danhsachsanpham])
@endsection
{{-- Thay thế nội dung vào Placeholder `custom-scripts` của view `frontend.layouts.master` --}}
@section('custom-scripts')
@endsection