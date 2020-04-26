<!DOCTYPE html>
<html>

<head>
    <title>Danh sách món ăn</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>

<body style="font-size: 10px">
    <div class="row">
        <table border="0" align="center" cellpadding="5" style="border-collapse: collapse;">
            <tr>
                <td colspan="7" align="center" style="font-size: 13px;" width="100">
                    <b>Coffee SunFlower </b></td>
            </tr>
            <tr>
                <td colspan="7" align="center" style="font-size: 13px">
                    <b>http://SunFlower.com/</b></td>
            </tr>
            <tr>
                <td colspan="7" align="center" style="font-size: 13px">
                    <b>(0292)3.888.999 # 01.222.888.999</b></td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    {{-- <img src="{{ asset('storage/photos/hhd.jpg') }}" /> --}}
                </td>
            </tr>
            <tr>
                <td colspan="7" class="caption" align="center" style="text-align: center; font-size: 20px">
                    <b>Danh sách món ăn</b>
                </td>
            </tr>
            <tr style="border: 1px thin #000">
                <th style="text-align: center">STT</th>
                <th style="text-align: center">Hình món ăn</th>
                <th style="text-align: center">Tên món ăn</th>
                <th style="text-align: center">Giá gốc</th>
                <th style="text-align: center">Giá bán</th>
                <th style="text-align: center">Nhóm thực đơn</th>
                <th style="text-align: center">Đơn vị tính</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr style="border: 1px thin #000">
                <td align="center" valign="middle" width="5">
                    {{ $loop->index + 1 }}
                </td>
                <td align="center" valign="middle" width="20" height="110">
                    {{-- <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->ma_hinh) }}" width="100" height="100" /> --}}
                </td>
                <td align="left" valign="middle" width="30">{{ $sp->ma_ten }}</td>
                <td align="right" valign="middle" width="15">{{ $sp->ma_giaVon }}</td>
                <td align="right" valign="middle" width="15">{{ $sp->ma_giaBan }}</td>
                @foreach ($danhsachntd as $ntd)
                    @if ($sp->id_nhom_thuc_don == $ntd->ntd_id)
                    <td align="left" width="15" valign="middle">{{ $ntd->ntd_ten }}</td>
                    @endif
                @endforeach
                @foreach ($danhsachdvt as $dvt)
                    @if ($sp->id_don_vi_tinh == $dvt->dvt_id)
                    <td align="left" width="15" valign="middle">{{ $dvt->dvt_ten }}</td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>