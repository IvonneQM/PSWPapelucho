<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Parvulo extends Model
{
    protected $table = 'parvulos';


    protected $fillable = ['rut','full_name','nivel_id', 'jornada_id', 'jardin_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id') ;
    }

    public function niveles(){
        return $this->belongsTo(Nivel::class,'nivel_id');
    }

    public function jornadas(){
        return $this->belongsTo(Jornada::class,'jornada_id');
    }

    public function jardines(){
        return $this->belongsTo(Jardin::class,'jardin_id');
    }


    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }

    public function scopeApoderado($query, $user_id){
            return $query->whereHas('user', function($q) use ($user_id)
            {
                $q->where('user_id',$user_id);
            });
    }

}
