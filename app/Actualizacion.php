<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualizacion extends Model
{
    protected $table = 'actualizaciones';

    protected $fillable = ['project_name','version','publish'];

    public function itemActualizaciones(){
        return $this->hasMany(ItemActualizacion::class);
    }

    public function proyecto(){
        return $this->belongsTo(Proyecto::class);
    }

}
