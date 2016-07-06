<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Person;
use App\Teacher;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'person_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function people()
    {
        return $this->belongsTo('App\Person');
    }

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
