@extends('backend.layouts.master')

@section('title')
Danh sách chi nhánh
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

<h1>Danh Sách chi nhánh</h1>
<br>
<a href="{{ route('danhsachchinhanh.create') }}" class="btn btn-primary">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên chi nhánh</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Cửa hàng</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachchinhanh as $cn)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $cn->cn_ten}}</td>
                <td>{{ $cn->cn_diachi}}</td>
                <td>{{ $cn->cn_soDienThoai}}</td>
                <td>{{ $cn->cuaHang->ch_ten}}</td>
                <td>
                    <a href="{{ route('danhsachchinhanh.edit', ['danhsachchinhanh' => $cn->cn_id]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachchinhanh.destroy', ['danhsachchinhanh' => $cn->cn_id]) }}" class="pull-left">
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Xóa</button>
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
