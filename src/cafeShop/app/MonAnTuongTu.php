<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAnTuongTu extends Model
{
    protected $table        = 'trn_mon_an_tuong_tu';
    protected $fillable     = ['id_mon_an_chinh','id_mon_an_tuong_tu', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_mon_an_chinh','id_mon_an_tuong_tu'];
}
