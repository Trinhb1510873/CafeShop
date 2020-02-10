<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XuatNVL extends Model
{
    protected $table        = 'mst_xuat_nguyen_vat_lieu';
    protected $fillable     = ['xnvl_id', 'xnvl_ten','xnvl_ngay_xuat','id_so_ket_toan','id_loai_xuat_nvl','id_nhan_vien_xuat','id_kho','id_chi_nhanh', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'xnvl_id';
}
