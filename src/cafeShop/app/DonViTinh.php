<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonViTinh extends Model
{
    protected $table        = 'mst_don_vi_tinh';
    protected $fillable     = ['dvt_id', 'dvt_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'dvt_id';
}
