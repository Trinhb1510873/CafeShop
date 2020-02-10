<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomThucDon extends Model
{
    protected $table        = 'mst_nhom_thuc_don';
    protected $fillable     = ['ntd_id', 'ntd_ten','ntd_dienGiai','id_bep','id_loaiMonAn', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ntd_id';
}
