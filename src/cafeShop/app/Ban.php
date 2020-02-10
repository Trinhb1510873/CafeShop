<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    protected $table        = 'mst_ban';
    protected $fillable     = ['ban_id', 'ban_ten','ban_trangThai','ban_soLuong','id_tang', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ban_id';
}
