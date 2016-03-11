@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Departments</div>

  <div class="content">
    <a href="/admin/new_dept"><button>Add New</button></a>
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
              <td><a href="{{ URL::to('admin/edit_dept/' . $dept->id) }}">{{ $dept->id}}</a></td>
              <td><a href="{{ URL::to('admin/edit_dept/' . $dept->id) }}">{{ $dept->name}}</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@stop
