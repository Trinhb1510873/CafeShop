<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiXuat extends Model
{
    protected $table        = 'mst_loai_xuat';
    protected $fillable     = ['lx_id', 'lx_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'lx_id';
}
