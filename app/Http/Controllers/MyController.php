<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyController extends Controller
{

  public function admin() {
    // $user = User::find(1);
    // $user->profile->gender;
    return view('frontend.admin');
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
