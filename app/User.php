<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * This mutator automatically hashes the password.
     *
     * @var string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }


    // user can have many tasks
    public function Tasks()
    {
        $this->hasMany('App/Task');
    }

    // user can have many Iceboxes
    public function Icebox()
    {
        $this->hasMany('App/Icebox');
    }

    //user can have many notes
    public function Note()
    {
        $this->hasMany('App\Note');
    }

    //a user can have many settings
    public function Settings()
    {
        $this->hasMany('App\Settings');
    }
}
