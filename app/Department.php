<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  public function authors() {
    return $this->hasMany('App\Author');
  }

  public function departments() {
    return $this->hasManyThrough('App\Author', 'App\Post');
  }
}
