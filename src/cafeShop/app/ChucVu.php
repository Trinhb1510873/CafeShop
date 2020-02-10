<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    protected $table        = 'mst_chuc_vu';
    protected $fillable     = ['cv_id', 'cv_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'cv_id';
}
