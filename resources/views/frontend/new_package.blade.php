@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Package</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/new_package')) !!}

    {!! Form::text('name', 'Type package topic here') !!}

    <select>
      @foreach ($authors as $author)
        <option value="{{$author->id}}">{{ $author->name }}</option>
      @endforeach
    </select>

    <select>
      @foreach ($posts as $post)
        <option value="{{$post->id}}">{{ $post->headline }}</option>
      @endforeach
    </select>

    <select>
      @foreach ($photos as $photo)
        <option value="{{$photo->id}}">{{ $author->img_link }}</option>
      @endforeach
    </select>

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
