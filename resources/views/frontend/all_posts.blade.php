@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Posts</div>
<div class="content">
  <a href="/admin/new_post"><button>Add New</button></a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Headline</th>
          <th>Author</th>
          <th>Text</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id}}</td>
            <td>{{ $post->headline }}</td>
            <td>{{ $post->author_id}}</td>
            <td>{{ $post->body_text}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop
