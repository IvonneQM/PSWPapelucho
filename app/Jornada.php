<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table = 'jornadas';


    public function parvulos(){
        return $this->hasMany(Parvulo::class);
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    protected $fillable = ['name'];

}
