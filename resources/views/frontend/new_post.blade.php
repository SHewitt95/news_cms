@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Post</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/new_post')) !!}

    {!! Form::text('headline', 'Headline here') !!}

    {!! Form::label('author', 'Author:') !!}
    <!--
    {!!Form::select('author', $authors, null, ['placeholder' => 'Pick an author...']) !!}
  -->
    <select>
      @foreach ($authors as $author)
        <option value="{{$author->id}}">{{ $author->name }}</option>
      @endforeach
    </select>

    <label>Package:</label>
    <select>
      @foreach ($packages as $package)
        <option value="{{ $package->id}}">{{ $package->topic }}</option>
      @endforeach
    </select>

    {!! Form::textarea('body_text', 'Body text here') !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
