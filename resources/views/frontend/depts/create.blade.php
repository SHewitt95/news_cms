@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Department</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/departments')) !!}

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', '') !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
