@extends('backend.layouts.master')

@section('title')
Danh sách Món Ăn
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

<h1>Danh Sách Món Ăn</h1>
<br>
<a href="{{ route('danhsachmonan.create') }}" class="btn btn-primary" title="Thêm mới">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Giá bán</th>
            <th>Hình ảnh</th>
            <th>Đơn vị tính</th>
            <th>Nhóm thực đơn</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachmonan as $ma)
            <tr>
                <td width='5%'>{{ $stt }}</td>
                <td width='10%'>{{ $ma->ma_ten}}</td>
                <td>{{ number_format($ma->ma_giaBan)}}đ</td>
                <td width='20%'><img width='100px' src="{{ asset('storage/photos/' .  $ma->ma_hinh ) }}" class="img-list" /></td>
                <td width='10%'>{{ $ma->donViTinh->dvt_ten}}</td>
                <td width='10%'>{{ $ma->nhomThucDon->ntd_ten}}</td>
                <td>
                    <a href="{{ route('danhsachmonan.edit', ['danhsachmonan' => $ma->ma_id]) }}" class="btn btn-primary pull-left" title="Chỉnh sửa">Sửa</i></a>
                    <a href="{{ route('danhsachmonan.show', ['danhsachmonan' => $ma->ma_id]) }}" class="btn btn-primary pull-left" title="Chi tiết">Chi tiết</i></a>
                    <form method="post" action="{{ route('danhsachmonan.destroy', ['danhsachmonan' => $ma->ma_id]) }}" class="pull-left">
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" title="Xóa">Xóa</button>
                    </form>
                </td>
            </tr>
            <?php $stt ++;?>
        @endforeach
    
    </tbody>
</table>
@endsection

@section('custom-scripts')

@endsection