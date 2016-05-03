@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Edit Photo</div>
  <div class="content">

    <img src="{{$photo->img_link}}" />

    {!! Form::model($photo, array('route' => array('admin.photos.update', $photo->id), 'method' => 'PUT')) !!}

    {!! Form::label('author_id', 'Author:') !!}
    {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

    {!! Form::label('package_id', 'Package:') !!}
    {{ Form::select('package_id', $packages, array('class' => 'form-control')) }}

    {!! Form::textarea('caption', $photo->caption) !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
