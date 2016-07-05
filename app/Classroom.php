<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;

class Classroom extends Model
{
    protected $fillable = [
		'name'
	];

	public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
