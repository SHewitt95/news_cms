@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Edit Package</div>
<div class="content">

  {!! Form::open(array('url' => '/admin/new_dept')) !!}

  {!! Form::label('name', 'Package:') !!}
  {!! Form::text('name', $package->topic) !!}

  {!! Form::submit('Save'); !!}

  {!! Form::close() !!}
</div>
@stop
