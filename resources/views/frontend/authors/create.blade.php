@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Author</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/authors')) !!}

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', '') !!}

    {!! Form::label('department', 'Department:') !!}
    {{ Form::select('department', $depts, array('class' => 'form-control')) }}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
