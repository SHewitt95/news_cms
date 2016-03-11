@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Post</div>
<div class="content">

  {!! Form::open(array('url' => URL::to('admin/posts'))) !!}

  {!! Form::label('headline', 'Headline:') !!}
  {!! Form::text('headline', $post->headline) !!}

  {!! Form::textarea('body_text', $post->body_text) !!}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
