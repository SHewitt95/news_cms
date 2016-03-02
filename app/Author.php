<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  public function department() {
    return $this->hasOne('App\Department');
  }

  public function posts() {
    return $this->hasMany('App\Post');
  }
}
