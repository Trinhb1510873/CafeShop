<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoKetToan extends Model
{
    protected $table        = 'mst_so_ket_toan';
    protected $fillable     = ['skt_id', 'skt_tg_bat_dau','skt_tg_ket_thuc','skt_trang_thai', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'skt_id';
}
