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
     //$authors = Author::lists('name', 'id');
     return view('frontend.photos.index', ["photos" => $photos]);
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
     // store
     dd($request->files);
     if (Request::hasFile('image'))
      {

        if (Request::file('image')->isValid())
          {
            $photo = new Photo;
            $photo->author_id = $request->author_id;
            $photo->package_id = $request->package_id;
            $photo->caption = $request->caption;

            $file = $request->files;


            $photo->save();
          } else {
            // Image is invalid
          }
      } else {
        // Image not uploaded
      }

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
       $post = Post::find($id);
       $authors = Author::lists('name', 'id');
       $packages = Package::lists('topic', 'id');

       return view('frontend.posts.edit', ["post" => $post, "authors" => $authors, "packages" => $packages]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id, Request $request)
   {
     $post = Post::find($id);
     $post->headline = $request->headline;
     $post->author_id = $request->author_id;
     $post->package_id = $request->package_id;
     $post->body_text = $request->body_text;
     $post->save();

      $posts = Post::all();
      return view('frontend.posts.index', ["posts" => $posts]);
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
      $post = Post::find($id);
      $post->delete();

      // redirect
      $posts = Post::all();
      return view('frontend.posts.index', ["posts" => $posts]);
   }
}
