<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table        = 'mst_nha_cung_cap';
    protected $fillable     = ['ncc_id', 'ncc_ten','ncc_diachi','ncc_sdt', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ncc_id';
}
