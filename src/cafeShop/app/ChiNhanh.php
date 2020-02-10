<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiNhanh extends Model
{
    protected $table        = 'mst_chi_nhanh';
    protected $fillable     = ['cn_id', 'cn_ten','cn_diachi','cn_soDienThoai','id_cuaHang','longitude','latitude', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'cn_id';
}
