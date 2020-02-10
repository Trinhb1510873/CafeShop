<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    protected $table        = 'mst_mon_an';
    protected $fillable     = ['ma_id', 'ma_ten','ma_dienGiai','ma_giaBan','ma_giaVon','ma_mon_dac_trung','ma_thay_doi_theo_thoi_gia','ma_ngung_ban','ma_hinh','id_don_vi_tinh','id_nhom_thuc_don', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ma_id';
}
