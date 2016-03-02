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

class MyController extends Controller
{

  public function admin() {
    return view('frontend.admin');
  }

  public function view_all_authors() {
    $authors = Author::all();
    return view('frontend.all_authors', ["authors" => $authors]);
  }

  public function view_all_departments() {
    $departments = Department::all();
    return view('frontend.all_departments', ["departments" => $departments]);
  }

  public function view_all_packages() {
    $packages = Package::all();
    return view('frontend.all_packages', ["packages" => $packages]);
  }

  public function view_all_photos() {
    $photos = Photo::all();
    return view('frontend.all_photos', ["photos" => $photos]);
  }

  public function view_all_posts() {
    $posts = Post::all();
    return view('frontend.all_posts', ["posts" => $posts]);
  }

  public function new_post() {
    $authors = Author::all();
    $packages = Package::all();
    return view('frontend.new_post', ["authors" => $authors, "packages" => $packages]);
  }

  public function make_new_post(Request $request) {
    $post = new Post;
  	$post->headline = $request->headline;
  	$post->author_id = $request->author_id;
  	$post->package_id = $request->package_id;
  	$post->body_text = $request->body_text;
  	$post->save();
    $posts = Post::all();
    return view('frontend.all_posts', ["posts" => $posts]);
  }

  public function index() {
    return view('frontend.hello');
  }

  /*public function index2() {

    $obj = new \stdClass();
    $obj->firstName = "Sherman";
    $obj->lastName = "Hewitt";

    return view('frontend.welcome', ["obj" => $obj]);
  }*/


}
