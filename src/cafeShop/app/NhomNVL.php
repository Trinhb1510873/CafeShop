<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomNVL extends Model
{
    protected $table        = 'mst_nhom_nguyen_vat_lieu';
    protected $fillable     = ['nnvl_id', 'nnvl_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'nnvl_id';
}
