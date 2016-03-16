@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Author</div>
<div class="content">

  {!! Form::model($author, array('route' => array('admin.authors.update', $author->id), 'method' => 'PUT')) !!}

  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', $author->name) !!}

  {!! Form::label('department', 'Department:') !!}
  {{ Form::select('department', $depts, array('class' => 'form-control')) }}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
