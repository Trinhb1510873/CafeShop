<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    protected $table        = 'mst_chi_tiet_hoa_don';
    protected $fillable     = ['id_hoa_don', 'id_mon_an','cthd_sl_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = ['id_hoa_don','id_mon_an'];
    public    $incrementing = false;
    
    
    protected function setKeysForSaveQuery(Builder $query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }

        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }

        return $query;
    }
    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }
        return $this->getAttribute($keyName);
    }
}
