<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';


    public function parvulos(){
        return $this->hasMany('App\Parvulo', 'jornadas');
    }
}
