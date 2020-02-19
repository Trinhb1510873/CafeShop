<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomThucDon extends Model
{
    protected $table        = 'mst_nhom_thuc_don';
    protected $fillable     = ['ntd_id', 'ntd_ten','ntd_dienGiai','id_bep','id_loaiMonAn', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ntd_id';
    
    public function monAn() {
        return $this->hasMany('App\MonAn', 'id_nhom_thuc_don', 'ntd_id');
    }
    public function bep() {
        return $this->belongsTo('App\Bep', 'id_bep', 'b_id');
    }
    public function loaiMonAn() {
        return $this->belongsTo('App\LoaiMonAn', 'id_loaiMonAn', 'lma_id');
    }
}
