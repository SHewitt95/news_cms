@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="postList">

  <h2 class="postList-title">Posts</h2>
  @foreach ($posts as $post)
    <div class="post">
      <a href="http://159.203.74.152/post/{{$post->id}}"><h2>{{ $post->headline }}</h2></a>
      <a href="http://159.203.74.152/post/{{$post->id}}"><h3>{{ $authors[$post->author_id] }}</h3></a>
      <a href="http://159.203.74.152/post/{{$post->id}}"><p>{{ str_limit($post->body_text, 100) }}</p></a>
    </div>
  @endforeach

</div> <!-- End postList -->
@stop
