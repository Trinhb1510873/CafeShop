<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietNhap extends Model
{
    protected $table        = 'mst_chi_tiet_nhap';
    protected $fillable     = ['id_nhap', 'id_nguyen_vat_lieu','ctn_so_luong','ctn_gia','ctn_hsd','id_don_vi_tinh', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_nhap','id_nguyen_vat_lieu'];
}
