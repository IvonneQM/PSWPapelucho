<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';


    public function parvulos(){
        return $this->hasMany('App\Parvulo', 'jornadas');
    }

    public function nivel(){
        return $this->belongsToMany('App\Nivel','niveles');
    }

    protected $fillable = ['name'];

}
