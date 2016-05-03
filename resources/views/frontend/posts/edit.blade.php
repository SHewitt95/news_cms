@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Post</div>
<div class="content">

  {!! Form::model($post, array('route' => array('admin.posts.update', $post->id), 'method' => 'PUT')) !!}

  {!! Form::label('headline', 'Headline:') !!}
  {!! Form::text('headline', $post->headline) !!}

  {!! Form::label('author_id', 'Author:') !!}
  {{ Form::select('author_id', $authors, array('class' => 'form-control')) }}

  {!! Form::label('package_id', 'Package:') !!}
  {{ Form::select('package_id', $packages, array('class' => 'form-control')) }}

  {!! Form::textarea('body_text', $post->body_text) !!}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
