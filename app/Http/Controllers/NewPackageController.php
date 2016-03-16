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

class NewPackageController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $packages = Package::all();
     return view('frontend.packages.index', ["packages" => $packages]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
     $posts = Post::lists('headline', 'id');
     $authors = Author::lists('name', 'id');
     return view('frontend.packages.create', ["posts" => $posts, "authors" => $authors]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     // store
     $package = new Package;
     $package->topic = $request->topic;
     $package->post_id = $request->post_id;
     $package->author_id = $request->author_id;
     $package->save();

     $packages = Package::all();
     return view('frontend.packages.index', ["packages" => $packages]);
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
       $package = Package::find($id);
       $authors = Author::lists('name', 'id');
       $posts = Post::lists('headline', 'id');

       return view('frontend.packages.edit', ["authors" => $authors, "posts" => $posts, "package" => $package]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
     $package = Package::find($id);
     $package->topic = $request->topic;
     $package->post_id = $request->post_id;
     $package->author_id = $request->author_id;
     $package->save();

      $packages = Package::all();
      return view('frontend.packages.index', ["packages" => $packages]);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
     // delete
      $package = Package::find($id);
      $package->delete();

      // redirect
      $packages = Package::all();
      return view('frontend.packages.index', ["packages" => $packages]);
   }
}
