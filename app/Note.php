<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['user_id', 'task_id', 'note'];


    //every note belongs to task
    public function Task()
    {
    	$this->belongsTo('App\Task', 'task_id');
    }

    //every note belongs to a user
    public function User()
    {
    	$this->belongsTo('App\User', 'user_id');
    }
}
