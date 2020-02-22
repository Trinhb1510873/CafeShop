@extends('backend.layouts.master')

@section('title')
Chi tiết món ăn
@endsection
@section('custom-css')
<style>
    a{
        margin-bottom: 10px;
    }
    th, td{
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>

<h1>Chi tiết Món Ăn "{{ $ma->ma_ten}}"</h1>
<br>

<div class="table-response">
    <table class="table">
        <tbody>
            <tr>
                <td>Tên món ăn</td>
                <td>{{ $ma->ma_ten}}</td>
            </tr>
            <tr>
                <td>Diễn giải</td>
                <td>{{ $ma->ma_dienGiai}}</td>
            </tr>
            <tr>
                <td>Giá bán</td>
                <td> {{ $ma->ma_giaBan}}</td>
            </tr>
            <tr>
                <td>Giá vốn</td>
                <td> {{ $ma->ma_giaVon}} </td>
            </tr>
            <tr>
                <td>Hình đại diện</td>
                <td> <img width='100px' src="{{ asset('storage/photos/' .  $ma->ma_hinh ) }}" class="img-list" /></td>
            </tr>   
            <tr>
                <td>Đơn vị tính</td>
                <td>  {{ $ma->donViTinh->dvt_ten}}</td>
            </tr> 
            <tr>
                <td>Thuộc nhóm thực đơn</td>
                <td>  {{ $ma->nhomThucDon->ntd_ten}}</td>
            </tr> 
        </tbody>
    </table>
</div>
@endsection

@section('custom-scripts')

@endsection
