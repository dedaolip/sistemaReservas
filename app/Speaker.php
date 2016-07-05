<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
		'name',
		'drand',
		'model',
		'patrimony',
	];
}
