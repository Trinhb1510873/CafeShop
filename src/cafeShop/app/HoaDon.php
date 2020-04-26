<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    const HD_TRANG_THAI_CHUA_THANH_TOAN = 1;
    const HD_TRANG_THAI_DA_THANH_TOAN  = 2;

    protected $table        = 'mst_hoa_don';
    protected $fillable     = ['hd_id', 'hd_ten','hd_trang_thai','hd_tg_vao','hd_tg_ra','hd_tong_tien','hd_tong_tien_phai_tra','id_nhan_vien','id_chi_nhanh','id_khach_hang','id_ct_khuyen_mai', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'hd_id';
}
