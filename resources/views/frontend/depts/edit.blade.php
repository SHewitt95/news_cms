@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Department</div>
<div class="content">

  {!! Form::model($dept, array('route' => array('admin.departments.update', $dept->id), 'method' => 'PUT')) !!}

  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', $dept->name) !!}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
