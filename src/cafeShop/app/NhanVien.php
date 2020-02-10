<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table        = 'mst_nhan_vien';
    protected $fillable     = ['nv_id', 'nv_hoTen','nv_ngaySinh','nv_gioiTinh','nv_diaChi','nv_sdt','nv_email','nv_so_cmnd','nv_so_tk_the','nv_trang_thai','id_chuc_vu','id_bo_phan','id_chi_nhanh', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'nv_id';
}
