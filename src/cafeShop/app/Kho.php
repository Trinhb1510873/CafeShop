<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    protected $table        = 'mst_kho';
    protected $fillable     = ['k_id', 'k_ten','k_diaChi', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'k_id';
}
