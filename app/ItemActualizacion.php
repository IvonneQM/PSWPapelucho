<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemActualizacion extends Model
{
    protected $table = 'item_actualizaciones';


    protected $fillable = ['title','description','actualizacion_id','categoria_actualizacion_id'];

    public function actualizacion(){
        return $this->belongsTo(Actualizacion::class, 'actualizacion_id') ;
    }

    public function categoria_Actualizacion(){
        return $this->belongsTo(CategoriaActualizacion::class, 'categoria_actualizacion_id') ;
    }

}
