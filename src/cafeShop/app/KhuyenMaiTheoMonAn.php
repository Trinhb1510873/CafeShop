<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMaiTheoMonAn extends Model
{
    protected $table        = 'trn_khuyen_mai_theo_mon_an';
    protected $fillable     = ['id_ctkm','id_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_ctkm','id_mon_an'];
}
