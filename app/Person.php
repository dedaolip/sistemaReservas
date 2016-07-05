<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	protected $fillable = [
		'id',
		'name',
		'address',
		'city',
		'state',
		'phone',
		'mobile',
	];

}
