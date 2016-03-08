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

class DeptController extends Controller
{

  public function view_all_departments() {
    $departments = Department::all();
    return view('frontend.all_departments', ["departments" => $departments]);
  }

  public function new_dept() {
    return view('frontend.new_dept');
  }

  public function make_new_dept(Request $request) {
    $dept = new Department;
    $dept->name = $request->name;
    $dept->save();
    return view('frontend.new_dept');
  }

}
