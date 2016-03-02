@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
  <div class="title">Photos</div>
  <div class="content">

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Caption</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($photos as $photo)
            <tr>
              <td>{{ $photo->id}}</td>
              <td>{{ $photo->img_link}}</td>
              <td>{{ $photo->caption}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@stop
