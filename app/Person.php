<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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

	public function user()
    {
        return $this->hasOne('App\User');
    }

}
