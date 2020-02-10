<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietXuat extends Model
{
    protected $table        = 'mst_chi_tiet_xuat';
    protected $fillable     = ['id_xuat', 'id_nguyen_vat_lieu','ctx_so_luong','id_don_vi_tinh', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_xuat','id_nguyen_vat_lieu'];
}
