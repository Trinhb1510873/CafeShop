<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaLamViec extends Model
{
    protected $table        = 'mst_ca_lam_viec';
    protected $fillable     = ['clv_id', 'clv_ten','clv_tg_bat_dau','clv_tg_ket_thuc','clv_so_tien', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'clv_id';
}
