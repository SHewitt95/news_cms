@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Upload Photo</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/photos','method'=>'POST', 'files'=>true)) !!}

    {!! Form::file('image') !!}

    {!! Form::label('author_id', 'Author:') !!}
    {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

    {!! Form::label('package_id', 'Package:') !!}
    {{ Form::select('package_id', $packages, array('class' => 'form-control')) }}

    {!! Form::textarea('caption', 'Caption text here') !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
