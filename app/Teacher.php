<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;
use App\Reservation;
use App\User;

class Teacher extends Model
{
    protected $fillable = [
		'user_id'
	];

	public function person()
    {
        return $this->belongsTo('App\Person');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
