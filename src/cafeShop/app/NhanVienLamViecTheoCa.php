<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVienLamViecTheoCa extends Model
{
    protected $table        = 'trn_nhan_vien_lv_theo_ca';
    protected $fillable     = ['id_nhan_vien','id_ca_lam_viec', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_nhan_vien','id_ca_lam_viec'];
}
