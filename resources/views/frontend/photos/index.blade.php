@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Photos</div>
<div class="content">
  {{ Form::open(array('url' => '/admin/photos/create', 'class' => 'pull-left')) }}
       {{ Form::hidden('_method', 'GET') }}
       {{ Form::submit('Upload Photo', array('class' => 'btn')) }}
   {{ Form::close() }}
   <br />
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Caption</th>
          <th>Author</th>
          <th>Image</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($photos as $photo)
          <tr>
            <td><a href="{{ URL::to('admin/photos/' . $post->id . '/edit/') }}">{{ $photo->id}}</a></td>
            <td><a href="{{ URL::to('admin/photos/' . $post->id . '/edit/') }}">{{ $photo->caption }}</a></td>
            <td><a href="{{ URL::to('admin/photos/' . $post->id . '/edit/') }}">{{ $photo->author_id}}</a></td>
            <td><a href="{{ URL::to('admin/photos/' . $post->id . '/edit/') }}">{{ $photo->img_link}}</a></td>
            <td>
              {{ Form::open(array('url' => 'admin/photos/' . $photo->id, 'class' => 'pull-right')) }}
                   {{ Form::hidden('_method', 'DELETE') }}
                   {{ Form::submit('Delete this Photo', array('class' => 'btn btn-warning')) }}
               {{ Form::close() }}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop