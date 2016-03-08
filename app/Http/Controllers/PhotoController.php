<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Author;
use App\Post;
use App\Department;
use App\Package;
use App\Photo;

class PhotoController extends Controller
{

  public function view_all_photos() {
    $photos = Photo::all();
    return view('frontend.all_photos', ["photos" => $photos]);
  }



}
