<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoPhan extends Model
{
    protected $table        = 'mst_bo_phan';
    protected $fillable     = ['bp_id', 'bp_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'bp_id';
}
