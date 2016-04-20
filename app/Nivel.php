<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';

    public function jornada()
    {
        return $this->belongsToMany(Jornada::class,'jornadas');
    }

    public function jardin()
    {
        return $this->belongsToMany(Jardin::class,'jardines');
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    protected $fillable = ['name'];

}
