@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">New Department</div>
  <div class="content">

    {!! Form::open(array('url' => '/admin/new_dept')) !!}

    {!! Form::text('name', 'Type new dept name here') !!}

    {!! Form::submit('Save'); !!}

    {!! Form::close() !!}

  </div>
@stop
