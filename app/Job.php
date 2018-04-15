<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = ['id','name','title','description','location','skills','experience','company_name','salary','user_id','approved','availability'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function bookmarks(){
    	return $this->hasMany('App\Bookmark');
    }
}
