<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  public function posts() {
    return $this->hasMany('App\Post');
  }

  public function photos() {
    return $this->hasMany('App\Photo');
  }

  public function authors() {
    return $this->hasMany('App\Author');
  }

  public function departments() {
    return $this->hasManyThrough('App\Author', 'App\Department');
  }
}
