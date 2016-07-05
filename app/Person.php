<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Teacher;
use App\Employee;

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

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }

    public function employee()
    {
        return $this->hasOne('App\Employee');
    }

}
