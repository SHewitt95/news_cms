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
            <td><a href="{{ URL::to('admin/edit_post/' . $post->id) }}">{{ $post->id}}</a></td>
            <td><a href="{{ URL::to('admin/edit_post/' . $post->id) }}">{{ $post->headline }}</a></td>
            <td><a href="{{ URL::to('admin/edit_post/' . $post->id) }}">{{ $post->author_id}}</a></td>
            <td><a href="{{ URL::to('admin/edit_post/' . $post->id) }}">{{ $post->body_text}}</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop
