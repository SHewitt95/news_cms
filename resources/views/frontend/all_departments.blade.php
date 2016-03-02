@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Departments</div>
  <div class="content">

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($departments as $dept)
            <tr>
              <td>{{ $dept->id}}</td>
              <td>{{ $dept->name}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@stop
