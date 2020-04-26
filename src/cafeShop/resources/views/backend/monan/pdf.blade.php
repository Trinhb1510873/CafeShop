<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }

        body {
            font-size: 10px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            vertical-align: middle;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .hinhSanPham {
            width: 100px;
            height: 100px;
        }

        .companyInfo {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        .companyImg {
            width: 200px;
            height: 200px;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td class="companyInfo">
                    Coffee SunFlower <br />
                    http://SunFlower.com/<br />
                    (0292)3.888.999 # 01.222.888.999<br />
                    <img src="{{ asset('storage/photos/hhd.jpg') }}" class="companyImg" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($danhsachmonan)/5);
         ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách sản phẩm</caption>
            <tr>
                <th colspan="7" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th style="text-align: center">STT</th>
                <th style="text-align: center">Hình món ăn</th>
                <th style="text-align: center">Tên món ăn</th>
                <th style="text-align: center">Giá gốc</th>
                <th style="text-align: center">Giá bán</th>
                <th style="text-align: center">Nhóm thực đơn</th>
                <th style="text-align: center">Đơn vị tính</th>
            </tr>
            @foreach ($danhsachmonan as $ma)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="center">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $ma->ma_hinh) }}" />
                </td>
                <td align="left">{{ $ma->ma_ten }}</td>
                <td align="right">{{ $ma->ma_giaVon }}</td>
                <td align="right">{{ $ma->ma_giaBan }}</td>
                @foreach ($danhsachntd as $ntd)
                @if ($ma->id_nhom_thuc_don == $ntd->ntd_id)
                    <td align="left" width="15" valign="middle">{{ $ntd->ntd_ten }}</td>
                    @endif
                @endforeach
                @foreach ($danhsachdvt as $dvt)
                    @if ($ma->id_don_vi_tinh == $dvt->dvt_id)
                    <td align="left" width="15" valign="middle">{{ $dvt->dvt_ten }}</td>
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
    </div>
</body>

</html>