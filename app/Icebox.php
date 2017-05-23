<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icebox extends Model
{
    protected $fillable = ['user_id', 'title', 'description'];

    //every icebox belongs to a user
    public function User()
    {
    	$this->belongsTo('App/User', 'user_id');
    }
}
