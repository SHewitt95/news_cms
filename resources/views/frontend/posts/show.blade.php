@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="postList">

  <div class="post">
    <h2>{{ $post->headline }}</h2>
    <h3>{{ $authors[$post->author_id] }}</h3>
    <p>{{ $post->body_text }}</p>
  </div>

</div> <!-- End postList -->
@stop
