@extends('frontend.layouts.master')

@section('title')
Coffee SunFlower
@endsection

@section('custom-css')
@endsection

@section('main-content')
<!-- Slider -->
@include('frontend.widgets.homepage-slider')
<!-- Banner -->
@include('frontend.widgets.homepage-banner', [$data = $ds_top3_newest_loai])
<!-- Product -->
@include('frontend.widgets.product-list', [$data = $danhsachmonan])
@endsection