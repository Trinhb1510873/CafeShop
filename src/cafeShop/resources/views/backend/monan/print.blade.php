@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách món ăn
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
                <td class="companyInfo" align="center">
                   Coffee  SunFlower<br />
                    http://SunFlower.com/<br />
                    (0292)3.888.999 # 01.222.888.999<br />
                    <img width="100px" src="{{ asset('storage/photos/hhd.jpg') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($danhsachmonan)/5);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách món ăn</caption>
            <tr>
                <th colspan="7" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình món ăn</th>
                <th>Tên món ăn</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Nhóm thực đơn</th>
                <th>Đơn vị tính</th>
            </tr>
            @foreach ($danhsachmonan as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="center">
                    <img width="100px" class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->ma_hinh) }}" />
                </td>
                <td align="left">{{ $sp->ma_ten }}</td>
                <td align="right">{{ $sp->ma_giaGoc }}</td>
                <td align="right">{{ $sp->ma_giaBan }}</td>
                @foreach ($danhsachntd as $ntd)
                    @if ($sp->id_nhom_thuc_don == $ntd->ntd_id)
                        <td align="left">{{ $ntd->ntd_ten }}</td>
                    @endif
                @endforeach
                
                @foreach ($danhsachdvt as $dvt)
                    @if ($sp->id_don_vi_tinh == $dvt->dvt_id)
                        <td align="left">{{ $dvt->dvt_ten }}</td>
                    @endif
                @endforeach
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="7" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Hình món ăn</th>
                <th>Tên món ăn</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Nhóm thực đơn</th>
                <th>Đơn vị tính</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection