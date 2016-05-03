@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="photoBox">

  <div class="photo">
    <img src="{{ $photo->img_link }}" />
    <p>{{ $photo->caption }} Photo by {{ $authors[$photo->author_id] }}</p>
  </div>

</div> <!-- End postList -->
@stop
