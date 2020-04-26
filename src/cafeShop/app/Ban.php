<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    const BAN_TRANG_THAI_TRONG = 1;
    const BAN_TRANG_THAI_CO_KHACH = 2;

    protected $table        = 'mst_ban';
    protected $fillable     = ['ban_id', 'ban_ten','ban_trangThai','ban_soLuong','id_tang', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ban_id';
    public function tang() {
        return $this->belongsTo("App\Tang", "id_tang","t_id");
    }
}
