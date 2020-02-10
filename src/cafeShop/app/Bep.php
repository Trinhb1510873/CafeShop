<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bep extends Model
{
    protected $table        = 'mst_bep';
    protected $fillable     = ['b_id', 'b_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'b_id';
}
