<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function authors() {
      return $this->hasMany('App\Author');
    }

    public function photos() {
      return $this->hasMany('App\Photo');
    }

    public function package() {
      return $this->hasOne('App\Package');
    }

    public function departments() {
	    return $this->hasManyThrough('App\Author', 'App\Department');
    }

}
