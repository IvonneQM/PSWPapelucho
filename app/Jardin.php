<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardines';

    public function nivel()
    {
        return $this->belongsToMany(Nivel::class,'niveles');
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    protected $fillable = ['name'];
}
