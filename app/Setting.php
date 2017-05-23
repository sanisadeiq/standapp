<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['option_name', 'user_id', 'option_value'];

   
    //every setting belongs to a user
    public function User()
    {
    	$this->belongsTo('App\User', 'user_id');
    }
}
