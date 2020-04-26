<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserNhanVien extends Model
{
    protected $table        = 'trn_user_nhanvien';
    protected $fillable     = ['id_nhan_vien', 'id_user', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'id_nhan_vien';
    public    $incrementing = false;
}
