<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parvulo extends Model
{
    protected $table = 'users';


    protected $fillable = ['rut','full_name'];
}
