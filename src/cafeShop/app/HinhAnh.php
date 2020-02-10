<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    protected $table        = 'mst_hinh_anh';
    protected $fillable     = ['ha_id', 'ha_ten','id_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ha_id';
}
