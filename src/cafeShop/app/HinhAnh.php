<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    protected $table        = 'mst_hinh_anh';
    protected $fillable     = ['ha_id', 'ha_ten','id_mon_an', 'created_at', 'updated_at','deleted_at'];
    protected $primaryKey   = 'ha_id';
    public    $incrementing = false;
    
    public function monAn(){
        return $this->belongsTo('App\MonAn', 'id_mon_an', 'ma_id');
    }
 
    /**
     * Set the keys for a save update query.
     *
     * @param  IlluminateDatabaseEloquentBuilder  $query
     * @return IlluminateDatabaseEloquentBuilder
     */
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

    /**
     * Get the primary key value for a save query.
     *
     * @param mixed $keyName
     * @return mixed
     */
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
