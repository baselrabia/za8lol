<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name' ,'email', 'password','phone', 'location', 'role', 'gender','avatar'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function jobs(){
        return $this->hasMany('App\Job');
    }
    public function bookmarks(){
        return $this->hasMany('App\Bookmark');
    }
    /*
    public function jobs(){
        return Job::where('user_id', $this->id)->get();
    }
    */
}
