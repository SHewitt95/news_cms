@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="photoBox">

  @foreach ($photos as $photo)
    <div class="photo">
      <img src="{{ $photo->img_link }}" />
    </div>
  @endforeach

</div> <!-- End postList -->
@stop
