<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = ['task_id', 'user_id', 'path'];

    
    //every attachment belongs to a task
    public function Tasks()
    {
        $this->belongsTo('App\Task', 'task_id');
    }

    //every attachment belongs to user
    public function User()
    {
        $this->belongsTo('App\User', 'user_id');
    }

}
