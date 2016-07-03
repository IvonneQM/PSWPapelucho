<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = ['name','publish','jardin_id'];
    protected $hidden = ['remember_token'];

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    public function jardin()
    {
        return $this->belongsTo(Jardin::class,'jardin_id');
    }



}
