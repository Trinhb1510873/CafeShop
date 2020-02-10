<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhapNVL extends Model
{
    protected $table        = 'mst_nhap_nguyen_vat_lieu';
    protected $fillable     = ['nnvl_id', 'nnvl_ma','nnvl_ten','nnvl_tong_tien','nnvl_ngay_nhap','nnvl_ghi_chu','nnvl_trang_thai','id_nhan_vien_lap_phieu','id_nhan_vien_ke_toan','id_nhan_vien_kho ','id_chi_nhanh','id_kho','id_so_ket_toan', 'id_nha_cung_cap', 'updated_at','deleted_at'];
    protected $primaryKey   = 'nnvl_id';
}
