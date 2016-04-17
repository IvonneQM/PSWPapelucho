<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['fileName','url','size'];

    public function galerias()
    {
        return $this->morphedByMany('App\Galeria', 'archivable');
    }

    public function jardines()
    {
        return $this->morphedByMany('App\Jardin', 'archivable');
    }

    public function niveles()
    {
        return $this->morphedByMany('App\Nivel', 'archivable');
    }

    public function parvulos()
    {
        return $this->morphedByMany('App\Parvulo', 'archivable');
    }

    public static function boot()
    {
        parent::boot();

        // al guardar un post
        \App\Archivo::saving(function($table){

        });
    }

}
