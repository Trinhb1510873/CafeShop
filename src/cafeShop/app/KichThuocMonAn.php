<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KichThuocMonAn extends Model
{
    protected $table        = 'trn_kich_thuoc_mon_an';
    protected $fillable     = ['id_mon_an','id_kich_thuoc', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_mon_an','id_kich_thuoc'];
}
