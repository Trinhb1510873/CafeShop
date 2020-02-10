<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KichThuoc extends Model
{
    protected $table        = 'mst_kich_thuoc';
    protected $fillable     = ['kt_id', 'kt_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'kt_id';
}
