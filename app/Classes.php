<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Reservation;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = [
		'name'
	];

	public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
