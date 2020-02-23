@extends('backend.layouts.master')

@section('title')
Danh sách nhân viên
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

<h1>Danh Sách nhân viên</h1>
<br>
<a href="{{ route('danhsachnhanvien.create') }}" class="btn btn-primary">+</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên nhân viên</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Chức vụ</th>
            <th>Bộ phận</th>
            <th>Chi Nhánh</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;?>
        @foreach ($danhsachnhanvien as $nv)
            <tr>
                <td width='10%'>{{ $stt}}</td>
                <td>{{ $nv->nv_hoTen}}</td>
                <td>{{ $nv->nv_diaChi}}</td>
                <td>{{ $nv->nv_sdt}}</td>
                <td>{{ $nv->chucvu->cv_ten}}</td>
                <td>{{ $nv->bophan->bp_ten}}</td>
                <td>{{ $nv->chinhanh->cn_ten}}</td>
                <td>
                    <a href="{{ route('danhsachnhanvien.edit', ['danhsachnhanvien' => $nv->nv_id]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachnhanvien.destroy', ['danhsachnhanvien' => $nv->nv_id]) }}" class="pull-left">
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
