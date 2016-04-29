<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Parvulo extends Model
{
    protected $table = 'parvulos';


    protected $fillable = ['rut','full_name'];

    public function user(){
        return $this->belongsTo(User::class) ;
    }

    public function niveles(){
        return $this->has(Nivel::class);
    }

    public function jornadas(){
        return $this->has(Jornada::class);
    }

    public function jardines(){
        return $this->has(Jardin::class);
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
