<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;


class Notebook extends Model
{
    protected $fillable = [
		'name',
		'drand',
		'model',
		'patrimony',
	];

	public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
