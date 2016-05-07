<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $table = 'auditorias';


    protected $fillable = ['user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id') ;
    }
}
