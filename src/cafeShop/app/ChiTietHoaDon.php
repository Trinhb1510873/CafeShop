<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table        = 'mst_chi_tiet_hoa_don';
    protected $fillable     = ['id_hoa_don', 'id_mon_an','cthd_sl_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_hoa_don','id_mon_an'];
}
