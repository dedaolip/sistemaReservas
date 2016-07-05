<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projector extends Model
{
    protected $fillable = [
		'name',
		'drand',
		'model',
		'patrimony',
	];
}
