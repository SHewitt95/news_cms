@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Package</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/packages')) !!}

    {!! Form::label('topic', 'Topic:') !!}
    {!! Form::text('topic', '') !!}

    {!! Form::label('author_id', 'Author:') !!}
    {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

    {!! Form::label('post_id', 'Post:') !!}
    {{ Form::select('post_id', $posts, array('class' => 'form-control')) }}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
