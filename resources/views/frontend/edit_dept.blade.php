@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Department</div>
<div class="content">

  {!! Form::open(array('url' => '/admin/new_dept')) !!}

  {!! Form::label('name', 'Dept Name:') !!}
  {!! Form::text('name', $dept->name) !!}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
