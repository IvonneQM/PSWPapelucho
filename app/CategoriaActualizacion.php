<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaActualizacion extends Model
{
    protected $table = 'categoria_actualizaciones';

    protected $fillable = ['title','publish'];

    public function itemActualizaciones(){
        return $this->hasMany(ItemActualizacion::class);
    }
}
