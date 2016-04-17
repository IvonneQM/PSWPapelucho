<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    public function archivos()
    {
        return $this->morphToMany('App\Archivo', 'archivable');
    }

    protected $fillable = ['name','publish'];
    protected $hidden = ['remember_token'];
}
