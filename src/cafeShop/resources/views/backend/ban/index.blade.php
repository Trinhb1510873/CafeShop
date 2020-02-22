@extends('backend.layouts.master')

@section('title')
Danh sách Bàn
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

<h1>Danh Sách Bàn</h1>
<br>
<a href="{{ route('danhsachban.create') }}" class="btn btn-primary">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Trạng thái</th>
            <th>Số lượng</th>
            <th>Tầng</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachban as $b)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $b->ban_ten}}</td>
                <td>{{ $b->ban_trangThai== 1 ? "Trống" : "Có khách"}}  </td>
                <td>{{ $b->ban_soLuong}}</td>
                <td>{{ $b->tang->t_ten}}</td>
                <td>
                    <a href="{{ route('danhsachban.edit', ['danhsachban' => $b->ban_id]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachban.destroy', ['danhsachban' => $b->ban_id]) }}" class="pull-left">
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
