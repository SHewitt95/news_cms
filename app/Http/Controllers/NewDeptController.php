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

class NewDeptController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $depts = Department::all();
     return view('frontend.depts.index', ["depts" => $depts]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
     return view('frontend.depts.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     // store
     $dept = new Department;
     $dept->name = $request->name;
     $dept->save();

     $depts = Department::all();
     return view('frontend.depts.index', ["depts" => $depts]);
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
       $dept = Department::find($id);
       return view('frontend.depts.edit', ["dept" => $dept]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
     $dept = Department::find($id);
     $dept->name = $request->name;
     $dept->save();

      $depts = Department::all();
      return view('frontend.depts.index', ["depts" => $depts]);
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
      $dept = Department::find($id);
      $dept->delete();

      // redirect
      $depts = Department::all();
      return view('frontend.depts.index', ["depts" => $depts]);
   }
}
