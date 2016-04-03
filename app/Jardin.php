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

    protected $fillable = ['name'];
}
