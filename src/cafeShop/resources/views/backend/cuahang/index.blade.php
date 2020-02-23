@extends('backend.layouts.master')

@section('title')
Danh sách cửa hàng
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

<h1>Danh Sách cửa hàng</h1>
<br>
<a href="{{ route('danhsachcuahang.create') }}" class="btn btn-primary">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên cửa hàng</th>
            <th>Tên người đại diện</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Mã số thuế</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachcuahang as $ch)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $ch->ch_ten}}</td>
                <td>{{ $ch->ch_tenNguoiDaiDien}}</td>
                <td>{{ $ch->ch_diaChi}}</td>
                <td>{{ $ch->ch_soDienThoai}}</td>
                <td>{{ $ch->ch_maSoThue}}</td>
                <td>
                    <a href="{{ route('danhsachcuahang.edit', ['danhsachcuahang' => $ch->ch_id]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachcuahang.destroy', ['danhsachcuahang' => $ch->ch_id]) }}" class="pull-left">
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
