<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['fileName','url','size','type'];

    public static function boot()
    {
        parent::boot();

        // al guardar un post
        \App\Archivo::saving(function($table){

        });
    }

}
