@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="photoGallery">

  <h2 class="photoG-title">Recent Photos</h2>
  <ul class="bxslider">
    @foreach ($photos as $photo)
      <li><a href="http://159.203.74.152/photo/{{$photo->id}}"><img src="{{$photo->img_link}}" /></a></li>
    @endforeach
  </ul>

</div> <!-- End photoGallery -->

<div class="postList">

  <h2 class="postList-title">Posts</h2>
  @foreach ($posts as $post)
  <div class="post">
    <a href="http://159.203.74.152/post/{{$post->id}}"><h3>{{ $post->headline }}</h3></a>
    <a href="http://159.203.74.152/post/{{$post->id}}"><p>{{ str_limit($post->body_text, 100) }}</p></a>
  </div>
  @endforeach

</div> <!-- End postList -->

<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script-->
<script src="http://159.203.74.152/js/jquery.min.js"></script>
<script src="http://159.203.74.152/js/jquery.bxslider.min.js"></script>
<script>
  $(document).ready(function(){
    $('.bxslider').bxSlider();
  });
</script>
@stop
