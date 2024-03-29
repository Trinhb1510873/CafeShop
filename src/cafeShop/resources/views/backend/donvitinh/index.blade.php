@extends('backend.layouts.master')

@section('title')
Danh sách Đơn Vị Tính
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

<h1>Danh Sách Đơn Vị Tính</h1>
<br>
<a href="{{ route('danhsachdonvitinh.create') }}" class="btn btn-primary" title="Thêm mới">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachdonvitinh as $dvt)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $dvt->dvt_ten}}</td>
                <td>
                    <a href="{{ route('danhsachdonvitinh.edit', ['danhsachdonvitinh' => $dvt->dvt_id]) }}" class="btn btn-primary pull-left" title="Chỉnh sửa">Sửa</a>
                    <form method="post" action="{{ route('danhsachdonvitinh.destroy', ['danhsachdonvitinh' => $dvt->dvt_id]) }}" class="pull-left">
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