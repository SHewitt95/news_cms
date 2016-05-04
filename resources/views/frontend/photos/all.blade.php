@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="photoBox">

  <h2 class="postList-title">Photos</h2>
  @foreach ($photos as $photo)
    <div class="photo">
      <a href="http://159.203.74.152/photo/{{$photo->id}}"><img src="{{ $photo->img_link }}" /></a>
    </div>
  @endforeach

</div> <!-- End postList -->
@stop
