<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Person;

class Teacher extends Model
{
    protected $fillable = [
		'user_id'
	];

	public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
