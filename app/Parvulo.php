<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parvulo extends Model
{
    protected $table = 'parvulos';


    protected $fillable = ['rut','full_name'];

    public function scopeUser($query, $value){
        if( !empty($value)) {
            return $query->where("users_id", $value);
        }
    }
}
