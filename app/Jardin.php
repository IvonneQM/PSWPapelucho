<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jardin extends Model
{
    protected $table = 'jardines';

    public function parvulos(){
        return $this->hasMany(Parvulo::class);
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    public function galerias()
    {
        return $this->hasMany(Galeria::class);
    }

    protected $fillable = ['name'];
}
