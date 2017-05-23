<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use SoftDeletes;

    protected $fillable = ['title', 'user_id', 'description', 'deadline', 'type'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

   //every task belongs to a user
    public function User(){
    	$this->belongsTo('App/User', 'user_id');
    }

    //tasks can have many attachments
    public function Attachments()
    {
        $this->hasMany('App\Attachment');
    }

    //tasks have many notes
    public function Note()
    {
    	$this->hasMany('App\Note');
    }
}
