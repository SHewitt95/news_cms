@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Packages</div>
  <div class="content">

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
              <td>{{ $package->id}}</td>
              <td>{{ $package->topic}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@stop
