<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

  protected $table = 'photo';
  public function posts() {
    return $this->hasMany('App\Post');
  }

  public function author() {
    return $this->hasOne('App\Author');
  }

  public function packages() {
    return $this->hasMany('App\Package');
  }
}
