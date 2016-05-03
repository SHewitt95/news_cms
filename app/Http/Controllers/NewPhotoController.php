<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Author;
use App\Post;
use App\Department;
use App\Package;
use App\Photo;

class NewPhotoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $photos = Photo::all();
     $authors = Author::lists('name', 'id');

     return view('frontend.photos.index', ["photos" => $photos, "authors" => $authors]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
     $authors = Author::lists('name', 'id');
     $packages = Package::lists('topic', 'id');

     return view('frontend.photos.create', ["authors" => $authors, "packages" => $packages]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {

        $photo = new Photo;
        $photo->author_id = $request->author_id;
        $photo->package_id = $request->package_id;
        $photo->caption = $request->caption;

        //$file = $request->files;
        //$myFile = $request->file("image")->getRealPath();

        $photo->save();

        $imageName = $photo->id . '.' .
          $request->file('image')->getClientOriginalExtension();

        //  dd($imageName);

        $imgPath = '/images/'. $imageName;

        $photo->img_link = $imgPath;

        $photo->save();

        //dd($imgPath);

        $request->file('image')->move(
          base_path() . '/public/images/', $imageName
        );


     $photos = Photo::all();
     return view('frontend.photos.index', ["photos" => $photos]);
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
       $photo = Photo::find($id);
       $authors = Author::lists('name', 'id');
       $packages = Package::lists('topic', 'id');

       return view('frontend.photos.edit', ["photo" => $photo, "authors" => $authors, "packages" => $packages]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
     $photo = Photo::find($id);
     $photo->author_id = $request->author_id;
     $photo->package_id = $request->package_id;
     $photo->caption = $request->caption;
     $photo->save();

      $photos = Photo::all();
      return view('frontend.photos.index', ["photos" => $photos]);
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
      $photo = Photo::find($id);
      $photo->delete();

      // redirect
      $photos = Photo::all();
      return view('frontend.photos.index', ["photos" => $photos]);
   }
}
