@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Author</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/new_author')) !!}

    {!! Form::text('name', 'Type author's name here') !!}

    {!! Form::label('dept_id', 'Department:') !!}
    {!!Form::select('dept_id', $departments, null, ['placeholder' => 'Pick a department...']) !!}

    <!--select>
      @foreach ($authors as $author)
        <option value="{{$author->id}}">{{ $author->name }}</option>
      @endforeach
    </select-->

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
