<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;
use App\Classes;
use App\Projector;
use App\Notebook;
use App\Classroom;
use App\Speaker;

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

	public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function classes()
    {
        return $this->belongsTo('App\Classes');
    }

    public function projector()
    {
        return $this->belongsTo('App\Projector');
    }

    public function notebook()
    {
        return $this->belongsTo('App\Notebook');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function speaker()
    {
        return $this->belongsTo('App\Speaker');
    }
}
