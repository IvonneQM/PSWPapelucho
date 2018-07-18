<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChoferVehiculo extends Model
{
    protected $table = 'choferVehiculo';
    protected $fillable = ['user_id', 'vehiculo_id'];
}

