<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';

    public function parvulos(){
        return $this->hasMany(Parvulo::class);
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    protected $fillable = ['name'];

}
