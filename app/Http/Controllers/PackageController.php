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

class PackageController extends Controller
{

  public function view_all_packages() {
    $packages = Package::all();
    return view('frontend.all_packages', ["packages" => $packages]);
  }

  public function new_package() {
    $authors = Author::all();
    $photos = Photo::all();
    $posts = Post::all();
    return view('frontend.new_package', ["authors" => $authors, "photos" => $photos, "posts" => $posts]);
  }

  //TODO
  public function make_new_package(Request $request) {
    $package = new Package;
    $package->topic = $request->topic;
    $package->author_id = $request->author_id;
    $package->photo_id = $request->photo_id;
    $package->post_id = $request->post_id;
    $package->save();
    return view('frontend.new_package');
  }

  public function edit_package($id) {
    $package = Package::find($id);
    return view('frontend.edit_package', ["package" => $package]);
  }

}
