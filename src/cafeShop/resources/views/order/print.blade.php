@extends('print.layout.paper')

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
@endsection
@section('content')
<section class="sheet padding-10mm" style="width: 302px">
    <article>
        <table border="0" align="center">
            <tr>Số: {{$hoaDon['hoaDonId']}}</tr>
            <tr>
                <td class="companyInfo" align="center">
                   <h1>COFFEE SUNFLOWER</h1>
                    130 Xô Viết Nghệ Tỉnh, Phường An Hội, Quận Ninh Kiều, TP Cần Thơ
                </td>
            </tr>
            <tr>
                <td class="companyInfo" align="center">
                    <br />
                    <b>PHIẾU THANH TOÁN </b>
                </td>
            </tr>
        </table>
        <br />
        <table border="0" align="center">
            <tr>
                <td align="">
                    <b>Bàn:</b> {{$hoaDon['ban']}}
                </td>
            </tr>
            <tr>
                <td align="">
                    <b>Khu vực:</b> {{$hoaDon['tang']}}
                </td>
            </tr>
            
            <tr>
                <td align="">
                    <b>TG vào:</b> {{$hoaDon['tgian_vao']}}
                </td>
            </tr>
            <tr>
                <td align="">
                    <b>TG ra:</b> {{$tgian_ra}}
                </td>
            </tr>
        </table>
        <br />
        <table  class="table" align="center" style="width: 290px">
            <thead>
                <tr>
                    <th class="text-center" width="3%" scope="col"></th>
                    <th align="left" width="35%" scope="col">Tên món</th>
                    <th align="right" width="20%" scope="col">Đ.Giá</th>
                    <th class="text-center" width="20%" scope="col">SL</th>
                    <th align="right" width="22%" scope="col">T.Tiền</th>
                </tr>
            </thead>
            <tbody>
               <?php $stt = 1 ?>
                @foreach ($chiTietHD as $val)
                <tr>
                    <td align="center">{{$stt}}</td>
                    <td align="left">{{$val['ma_ten']}}</td>
                    <td align="right">{{$val['ma_giaBan']}}</td>
                    <td align="center">{{$val['sl_mon_an']}}</td>
                    <td align="right"><?php echo number_format($val['thanh_tien']) ?></td>
                </tr>
                <?php $stt ++ ?>
                @endforeach
                <tr>
                    <td align="center"></td>
                    <td colspan="3" align="left"><b>Tổng tiền</b></td>
                    <td align="right"><?php echo number_format($hoaDon['tong_tien']) ?></td>
                </tr>
                <tr>
                    <td align="center"></td>
                    <td colspan="3" align="left"><b>Giảm giá</b></td>
                    @if($giam_gia)
                    <td align="right">{{$giam_gia}}%</td>
                    @else
                    <td align="right">0%</td>
                    @endif
                </tr>
                <tr>
                    <td align="center"></td>
                    <td colspan="3" align="left"><b>Tổng tiền thanh toán</b></td>
                    <td align="right"><?php echo number_format($hoaDon['tong_tien_phai_tra']) ?></td>
                </tr>
            </tbody>
        </table>
       <br/>
        <b>Người lập phiếu:</b> {{$hoaDon['nhan_vien']}}
    </article>
</section>
@endsection
