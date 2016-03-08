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

class AuthorController extends Controller
{

  public function view_all_authors() {
    $authors = Author::all();
    return view('frontend.all_authors', ["authors" => $authors]);
  }

  public function new_author() {
    $departments = Department::all();
    return view('frontend.new_author', ["departments" => $departments]);
  }

  public function make_new_author(Request $request) {
    $author = new Author;
    $author->name = $request->name;
    $author->dept_id = $request->dept_id;
    $author->save();
    $departments = Department::all();
    return view('frontend.all_authors', ["departments" => $departments]);
  }

}
