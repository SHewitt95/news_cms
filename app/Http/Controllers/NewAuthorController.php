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

class NewAuthorController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $authors = Author::all();
     $depts = Department::lists('name', 'id');

     //dd($depts);


     return view('frontend.authors.index', ["authors" => $authors, "depts" => $depts]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
     $depts = Department::lists('name', 'id');
     return view('frontend.authors.create', ["depts" => $depts]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     // store
     $author = new Author;
     $author->name = $request->name;
     $author->department = $request->department;
     $author->save();

     $authors = Author::all();
     return view('frontend.authors.index', ["authors" => $authors]);
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
       $author = Author::find($id);
       $depts = Department::lists('name', 'id');

       return view('frontend.authors.edit', ["author" => $author, "depts" => $depts]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
     $author = Author::find($id);
     $author->name = $request->name;
     $author->department = $request->department;
     $author->save();

      $authors = Author::all();
      return view('frontend.authors.index', ["authors" => $authors]);
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
      $author = Author::find($id);
      $author->delete();

      // redirect
      $authors = Author::all();
      return view('frontend.authors.index', ["authors" => $authors]);
   }
}
