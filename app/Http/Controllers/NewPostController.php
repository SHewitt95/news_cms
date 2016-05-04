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

class NewPostController extends Controller
{

    public function posts_json() {
        $posts = Post::all();
        return response()->json($posts);
    }


    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
     $posts = Post::all();
     $authors = Author::lists('name', 'id');
     $packages = Package::lists('topic', 'id');

     //dd($authors);
     return view('frontend.posts.index', ["posts" => $posts, "authors" => $authors, "packages" => $packages]);
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

     return view('frontend.posts.create', ["authors" => $authors, "packages" => $packages]);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store(Request $request)
   {
     // store
     $post = new Post;
     $post->headline = $request->headline;
     $post->author_id = $request->author_id;
     $post->package_id = $request->package_id;
     $post->body_text = $request->body_text;
     $post->save();

     $posts = Post::all();
     return view('frontend.posts.index', ["posts" => $posts]);
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
       $post = Post::find($id);
       $authors = Author::lists('name', 'id');

       return view('frontend.posts.show', ["post" => $post, "authors" => $authors]);
   }

   public function showAll()
   {
     $posts = Post::all();
     $authors = Author::lists('name', 'id');

     return view('frontend.posts.all', ["posts" => $posts, "authors" => $authors]);
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
      $packages = Package::lists('topic', 'id');
      $authors = Author::lists('name', 'id');

      return view('frontend.posts.index', ["posts" => $posts, "packages" => $packages, "authors" => $authors]);
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
