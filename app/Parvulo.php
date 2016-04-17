<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parvulo extends Model
{
    protected $table = 'parvulos';


    protected $fillable = ['rut','full_name'];

    public function scopeUser($query, $user_id){
        if( !empty($user_id)) {
            return $query->where("user_id", $user_id);
        }
    }

    public function scopeJornada($query, $jornada_id){
        if( !empty($jornada_id)) {
            return $query->where("jornada_id", $jornada_id);
        }
    }

    public function archivos()
    {
        return $this->morphToMany('App\Archivo', 'archivable');
    }
}
