<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAnKem extends Model
{
    protected $table        = 'trn_mon_an_kem';
    protected $fillable     = ['id_mon_an_chinh','id_mon_an_kem', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_mon_an_chinh','id_mon_an_kem'];
}
