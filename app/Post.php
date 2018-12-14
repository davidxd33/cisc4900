<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function votes()
    {
    	return $this->hasMany('App\Vote');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
