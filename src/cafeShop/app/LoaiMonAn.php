<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiMonAn extends Model
{
    protected $table        = 'mst_loai_mon_an';
    protected $fillable     = ['lma_id', 'lma_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'lma_id';
}
