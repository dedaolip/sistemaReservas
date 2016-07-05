<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
		'id',
		'teacher_id',
		'class_id',
		'classroom_id',
		'projector_id',
		'notebook_id',
		'speaker_id',
		'date',
		'period',
		'block',
	];
}
