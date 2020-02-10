<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tang extends Model
{
    protected $table        = 'mst_tang';
    protected $fillable     = ['t_id', 't_ten', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 't_id';
}
