<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiCTKM extends Model
{
    protected $table        = 'mst_loai_chuong_trinh_khuyen_mai';
    protected $fillable     = ['lctkm_id', 'lctkm_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'lctkm_id';
}
