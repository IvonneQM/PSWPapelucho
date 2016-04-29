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

    public function scopeApoderado($query, $user_id){
            return $query->whereHas('user', function($q) use ($user_id)
            {
                $q->where('user_id',$user_id);
            });
    }

    public function scopeJornada($query, $jornada_id){
        if( !empty($jornada_id)) {
            return $query->where('jornada_id', $jornada_id);
        }
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'archivable');
    }
}
