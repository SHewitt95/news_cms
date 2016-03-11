@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Posts</div>
<div class="content">
  {{ Form::open(array('url' => '/admin/posts/create', 'class' => 'pull-left')) }}
       {{ Form::hidden('_method', 'GET') }}
       {{ Form::submit('Make New Post', array('class' => 'btn')) }}
   {{ Form::close() }}
   <br />
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Headline</th>
          <th>Author</th>
          <th>Package</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td><a href="{{ URL::to('admin/posts/' . $post->id . '/edit/') }}">{{ $post->id}}</a></td>
            <td><a href="{{ URL::to('admin/posts/' . $post->id . '/edit/') }}">{{ $post->headline }}</a></td>
            <td><a href="{{ URL::to('admin/posts/' . $post->id . '/edit/') }}">{{ $post->author_id}}</a></td>
            <td><a href="{{ URL::to('admin/posts/' . $post->id . '/edit/') }}">{{ $post->package_id}}</a></td>
            <td>
              {{ Form::open(array('url' => 'admin/posts/' . $post->id, 'class' => 'pull-right')) }}
                   {{ Form::hidden('_method', 'DELETE') }}
                   {{ Form::submit('Delete this Post', array('class' => 'btn btn-warning')) }}
               {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop
