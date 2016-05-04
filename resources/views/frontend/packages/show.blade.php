@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="packageBox">

  <div class="photoBox">
    <div class="photo">
      <img src="{{ $photos[$package->id] }}" />
      <p>{{ $photoCaptions[$package->id] }} Photo by {{ $authors[$photographers[$package->id]] }}</p>
    </div>
  </div> <!-- End photoBox -->

  <div class="postList">

    <div class="post">
      <h2>{{ $headlines[$package->id] }}</h2>
      <h3>{{ $authors[$writtenAuthor[$package->id]] }}</h3>
      <p>{{ $body[$package->id] }}</p>
    </div>

  </div> <!-- End postList -->

</div> <!-- End packageBox -->
@stop
