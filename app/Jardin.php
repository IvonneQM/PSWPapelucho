<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardines';

    public function nivel()
    {
        return $this->belongsToMany('App\Nivel','niveles');
    }

    public function archivos()
    {
        return $this->morphToMany('App\Archivo', 'archivable');
    }

    protected $fillable = ['name'];
}
