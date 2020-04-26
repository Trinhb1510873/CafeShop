@extends('layouts.master')
@section('title')
Order
@endsection

@section('custom-css')
<style>
    table {
        cursor: pointer;
        text-align: center;
        width: 100px; 
        height: 70px;
    }
    .form-control{
        width:300px;
    }
    .disabledbutton {
        pointer-events: none;
        opacity: 0.4;
    }
    .active{
        background: red !important;
    }
    .active_food{
        background: red !important;
    }
    .empty {
        background: #33ffff;
    }
    .notEmpty {
        background: pink;
    }

</style>
@endsection

@section('content')
<form method="post" action="{{ route('order.print') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" id="ban_id" name="ban_id"/>
    <input type="hidden" id="ma_id" name="ma_id"/>
    <div class="row">
        <div class="col-md-4" style="overflow: auto; height: 650px"> 
            <h3>Danh sách bàn</h3>
            @foreach ($data_arr_tang as $key => $val)
            <h5>{{$val['t_ten']}}</h5>
            <div class="row">
                @foreach ($val['ds_ban'] as $key => $ban)
                <div class="col-md-2" value="{{ $ban->ban_trangThai }}">
                    @if ($ban->ban_trangThai == 1)
                    <table class="table_desk empty" id="b_{{ $ban->ban_id }}">
                        <tr>
                            <td>{{ $ban->ban_ten}}</td>
                        </tr>
                        <tr>
                            <td id="status_{{ $ban->ban_id }}" >
                                {{ $ban->ban_trangThai == 1 ? "Trống" : "Có khách"}}
                            </td>
                        </tr>
                    </table>
                    @else
                    <table class="table_desk notEmpty" id="b_{{ $ban->ban_id }}"  >
                        <tr>
                            <td>{{ $ban->ban_ten}}</td>
                        </tr>
                        <tr>
                            <td id="stastus_{{ $ban->ban_id }}">
                                {{ $ban->ban_trangThai == 1 ? "Trống" : "Có khách"}}
                            </td>
                        </tr>
                    </table>
                    @endif
                    <br>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp;
                
                @endforeach
            </div>
            <hr>
            @endforeach
        </div>
        
        <div class="col-md-4" style="overflow: auto; height: 650px">
            <h3>Danh sách món ăn và nước uống</h3>
            @foreach ($data_arr_ntd as $key => $val)
            <h5>{{$val['ntd_ten']}}</h5>
            <div class="row">
                @foreach ($val['ds_ma'] as $key => $ma)
                <div class="col-md-2 disabledbutton">
                    <table class="table_food" id="ma_{{ $ma->ma_id }}" style="width: 110px; height: 150px; background: white;" onclick="giaMon({{$ma->ma_giaBan}})">
                        <input type="hidden" id="gia_mon" name="gia_mon">
                        <tr>
                            <td><img width='100px' height="60px" src="{{ asset('storage/photos/' .  $ma->ma_hinh ) }}" class="img-list" /></td>
                        </tr>
                        <tr>
                            <td>{{ $ma->ma_ten}}</td>
                        </tr>
                        <tr>
                            <td><?php echo number_format($ma->ma_giaBan) ?>đ</td>
                        </tr>
                    </table>
                    <br>
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp;
                @endforeach
            </div>
            @endforeach
        </div>
        
        <div class="col-md-4 disabledbutton" style="overflow: auto; height: 650px">
            <div class="form-group">
                <div class="row" style="height: 40px">
                    <label>Số lượng:</label>
                    <input id="so_luong" style="height: 30px; width: 60px" type="number" min="-100" max="100" class="form-control" placeholder="0" title="Nhập số lượng"/>
                    &nbsp; &nbsp;
                    <button style="height: 30px; width: 100px" type="button" class="btn btn-danger" title="Cập nhật hóa đơn" onclick="insert()"><span class="glyphicon glyphicon-pencil"></span>Cập nhật</button>
                </div>
                <div class="row">
                        <p id="error"></p>
                </div>
            </div>
            <div class="row" style="height: 300px">
                <table class="table table-striped table-hover" id="billTable">
                    <thead>
                        <tr>
                            <th class="text-center" width="3%" scope="col">STT</th>
                            <th class="text-center" width="35%" scope="col">Tên món</th>
                            <th class="text-center" width="20%" scope="col">Đơn giá</th>
                            <th class="text-center" width="20%" scope="col">Số lượng</th>
                            <th class="text-center" width="22%" scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            <hr>
            <div class="row" style="height: 90px">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Giảm giá (%) </label>
                        </div>
                        <div class="col-md-6">
                            <input style="width: 60px" type="number" id="giam_gia"  min="1" max="100" class="form-control" placeholder="0" name="giam_gia"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Tổng tiền (VNĐ)</label>
                        </div>
                        <div class="col-md-6">
                            <input style="width: 200px" type="text" id="tong_tien" class="form-control"/>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Tổng tiền thanh toán (VNĐ)</label>
                        </div>
                        <div class="col-md-6">
                            <input style="width: 200px" type="text" id="tong_tien_thanh_toan" class="form-control"/>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="text-align: center;">
                        <div class="col-md-5"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success" id="thanh_toan">Thanh Toán</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@section('custom-scripts')
<script>
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    $(document).ready(function(){
        
       
    });
    $('body').on('click', '.table_desk', function(){
        var val = $('#ban_id').val();
        var id = this.id.split("_");
        if(!val){
            $('.disabledbutton').removeClass('disabledbutton');
            $('#ban_id').val(id[1]);
            $("#" +this.id).addClass('active');
        } else {
            $("#" + id[0] + '_' + val).removeClass('active');
            $("#" +this.id).addClass('active');
            $('#ban_id').val(id[1]);
        }
        
        $.post("{{route('order.getHoaDon')}}", {ban_id : $('#ban_id').val()}, function(data){
            $('#billTable > tbody').empty();
            if(data.success == true){
                getChiTietHoaDon(data);
            }
            
        });
    });
    
    $('body').on('click', '.table_food', function(){
        var val = $('#ma_id').val();
        var id = this.id.split("_");
        if(!val){
            $('#ma_id').val(id[1]);
            $("#" +this.id).addClass('active_food');
        } else {
            $("#" + id[0] + '_' + val).removeClass('active_food');
            $("#" +this.id).addClass('active_food');
            $('#ma_id').val(id[1]);
        }
    });
    
    function insert() {
        var ban_id = $('#ban_id').val();
        var ma_id = $('#ma_id').val();
        var so_luong = $('#so_luong').val();
        var gia_mon = $('#gia_mon').val();
        var error = '';
        if(ban_id == ''){
           error = 'Vui lòng chọn bàn';
        } else if(ma_id == '') {
            error = 'Vui lòng chọn món ăn hoặc nước uống';
        }
        else if(so_luong == ''){
            error = 'Vui lòng nhập số lượng ';
        }
        
        if(error){
            $("#error").html(error).css('color', 'red');
        } else {
            $("#error").empty();
            $.post("{{route('order.store')}}", {
                ban_id : ban_id,
                ma_id : ma_id,
                so_luong : so_luong,
                gia_mon : gia_mon,
            }, function(data){
                $('#billTable > tbody').empty();
                if(data.success == true){
                    getChiTietHoaDon(data);
                } else {
                    $("#error").html(data).css('color', 'red');
                }
            });
            
        }
    }
    
    function giaMon(price){
        $('#gia_mon').val(price);
    }
    
    function getChiTietHoaDon(data){
        var hoa_don = data.hoaDon;
        var stt = 1;
        $.each(hoa_don, function(key, value){
            $('#billTable > tbody:last-child').append('<tr><td>'+stt+'</td><td>'+value.ma_ten +'</td><td>'+value.ma_giaBan+'</td><td>'+value.cthd_sl_mon_an+'</td><td>'+value.thanh_tien+'</td></tr>');
            stt++;
        });
        var tong_tien = data.toTal.tong_tien;
        var tong_tien_thanh_toan = data.toTal.tong_tien_phai_tra;
        var ban = data.toTal.ban;
        var trang_thai = data.toTal.ban_trangThai;
        $("#b_"+ban).addClass('notEmpty');
        
        $("#status_"+ban).html(trang_thai == 1 ? "Trống" : "Có khách");
        $('#tong_tien').val(tong_tien);
        $('#tong_tien_thanh_toan').val(tong_tien_thanh_toan);
    }
    
    $("#thanh_toan").on("click", function(){
        $('#giam_gia').val('');
        $('#tong_tien').val('');
        $('#tong_tien_thanh_toan').val('');
        window.reload();
    });
</script>
@endsection


