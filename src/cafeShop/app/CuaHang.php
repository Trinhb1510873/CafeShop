<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuaHang extends Model
{
    protected $table        = 'mst_cua_hang';
    protected $fillable     = ['ch_id', 'ch_ten','ch_tenNguoiDaiDien','ch_diaChi','ch_soDienThoai','ch_maSoThue', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ch_id';
}
