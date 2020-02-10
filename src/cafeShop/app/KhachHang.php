<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table        = 'mst_khach_hang';
    protected $fillable     = ['kh_id', 'kh_ten','kh_sdt','kh_diachi', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'kh_id';
}
