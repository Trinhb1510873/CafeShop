<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TonNVL extends Model
{
    protected $table        = 'mst_ton_nguyen_vat_lieu';
    protected $fillable     = ['tnvl_id', 't_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'tnvl_id';
}
