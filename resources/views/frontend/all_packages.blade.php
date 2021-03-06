@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Packages</div>
  <div class="content">
    <a href="/admin/new_package"><button>Add New</button></a>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Topic</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($packages as $package)
            <tr>
              <td><a href="{{ URL::to('admin/edit_package/' . $package->id) }}">{{ $package->id}}</a></td>
              <td><a href="{{ URL::to('admin/edit_package/' . $package->id) }}">{{ $package->topic}}</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@stop
