<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

	protected $table = 'vehiculos';
    protected $fillable = ['patente','marca','modelo', 'user_id'];

    public function user (){
        return $this->belongsTo(User::class, 'user_id');
	}
	
	public function scopeDueno($query, $user_id){
		return $query->whereHas('user', function($q) use ($user_id)
		{
			$q->where('user_id',$user_id);
		});
	}

	public function scopeChofer($query, $user_id){
		return $query->whereHas('user', function($q) use ($user_id)
		{
			$q->where('user_id',$user_id);
		});
	}
}


