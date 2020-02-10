<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAnCuaBan extends Model
{
    protected $table        = 'trn_mon_an_cua_ban';
    protected $fillable     = ['id_ban','id_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_ban','id_mon_an'];
}
