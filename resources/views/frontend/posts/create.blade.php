@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Post</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/posts')) !!}

    {!! Form::label('headline', 'Headline:') !!}
    {!! Form::text('headline', '') !!}

    {!! Form::label('author_id', 'Author:') !!}
    {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

    {!! Form::label('package_id', 'Package:') !!}
    {{ Form::select('package_id', $packages, array('class' => 'form-control')) }}

    {!! Form::textarea('body_text', 'Body text here') !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
