<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuongTrinhKhuyenMai extends Model
{
    protected $table        = 'mst_chuong_trinh_khuyen_mai';
    protected $fillable     = ['ctkm_id', 'ctkm_ma','ctkm_ten','ctkm_so_luong','ctkm_dien_giai','ctkm_tg_bat_dau','ctkm_tg_ket_thuc','id_loai_ctkm', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ctkm_id';
}
