<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    protected $table = 'mapas';

    protected $fillable = ['zoom', 'latitud', 'longitud'];
}
