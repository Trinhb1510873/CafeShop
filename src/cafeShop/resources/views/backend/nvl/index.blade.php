@extends('backend.layouts.master')

@section('title')
Danh sách nguyên vật liệu
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

<h1>Danh sách nguyên vật liệu</h1>
<br>
<a href="{{ route('danhsachnvl.create') }}" class="btn btn-primary">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên nguyên vật liệu</th>
            <th>Số lượng</th>
            <th>Đơn vị tính</th>
            <th>Nhóm nguyên vật liệu</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachnvl as $nvl)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $nvl->nvl_ten}}</td>
                <td>{{ $nvl->nvl_soLuong}}</td>
                <td>{{ $nvl->donvitinh->dvt_ten}}</td>
                <td>{{ $nvl->nhomnvl->nnvl_ten}}</td>
                <td>
                    <a href="{{ route('danhsachnvl.edit', ['danhsachnvl' => $nvl->nvl_id]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachnvl.destroy', ['danhsachnvl' => $nvl->nvl_id]) }}" class="pull-left">
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
