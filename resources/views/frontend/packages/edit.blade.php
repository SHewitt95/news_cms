@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Package</div>
<div class="content">

  {!! Form::model($package, array('route' => array('admin.packages.update', $package->id), 'method' => 'PUT')) !!}

  {!! Form::label('topic', 'Topic:') !!}
  {!! Form::text('topic', $package->topic) !!}

  {!! Form::label('author_id', 'Author:') !!}
  {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

  {!! Form::label('post_id', 'Post:') !!}
  {{ Form::select('post_id', $posts, array('class' => 'form-control')) }}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
