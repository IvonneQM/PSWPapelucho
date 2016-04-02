<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parvulo extends Model
{
    protected $table = 'parvulos';


    protected $fillable = ['rut','full_name'];

    public function scopeUserId($query, $users_id )
    {
        if(trim($users_id) != " " or empty($users_id))
        {
            $query->where('users_id', "=" ,$users_id);
        }
    }
}
