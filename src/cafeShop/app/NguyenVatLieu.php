<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenVatLieu extends Model
{
    protected $table        = 'mst_nguyen_vat_lieu';
    protected $fillable     = ['nvl_id', 'nvl_ten','nvl_tinhChat','nvl_soLuong','id_don_vi_tinh','id_kho','id_nhom_nvl', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'nvl_id';
}
