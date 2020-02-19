@extends('backend.layouts.master')

@section('title')
Hiệu chỉnh nhóm thực đơn
@endsection

@section('custom-css')

@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>Hiệu chỉnh nhóm thực đơn</h1>
<form method="post" action="{{ route('danhsachnhomthucdon.update', ['danhsachnhomthucdon' => $ntd->ntd_id]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    {{ csrf_field() }}
    <div class="form-group">
        <label for="ntd_ten">Tên nhóm thực đơn</label>
        <input style="width:300px;"type="text" class="form-control" id="ntd_ten" name="ntd_ten" value="{{ old('ntd_ten', $ntd->ntd_ten) }}">
    </div> 
    <div class="form-group">
        <label for="ntd_dienGiai">Diễn giải</label>
        <input placeholder="Mời nhập diễn giải" style="width:300px;"type="text" class="form-control" id="ntd_dienGiai" name="ntd_dienGiai" value="{{ old('ntd_dienGiai', $ntd->ntd_dienGiai) }}">
    </div>
    <div class="form-group">
        <label for="id_bep">Bếp</label>
        <select style="width:300px;" name="id_bep" class="form-control">
            @foreach($danhsachbep as $bep)
                @if($bep->b_id == $ntd->id_bep)
                <option value="{{ $bep->b_id }}" selected>{{ $bep->b_ten }}</option>
                @else
                <option value="{{ $bep->b_id }}">{{ $bep->b_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="id_loaiMonAn">Loại món ăn</label>
        <select style="width:300px;" name="id_loaiMonAn" class="form-control">
            @foreach($danhsachloai as $loai)
                @if($loai->lma_id == $ntd->id_loaiMonAn )
                <option value="{{ $loai->lma_id }}" selected>{{ $loai->lma_ten }}</option>
                @else
                <option value="{{ $loai->lma_id }}">{{ $loai->lma_ten }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
    <button type="button" class="btn btn-success" onclick=history.back() >Quay lại</button>
</form>
@endsection

@section('custom-scripts')
<script>
$(document).ready(function(){
    
});
</script>

@endsection