<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThayDoiTheoThoiGia extends Model
{
    protected $table        = 'mst_thay_doi_theo_thoi_gia';
    protected $fillable     = ['id_mon_an', 'td_gia','td_thoi_gian', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'id_mon_an';
}
