@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Authors</div>
 <div class="content">
   {{ Form::open(array('url' => '/admin/authors/create', 'class' => 'pull-left')) }}
        {{ Form::hidden('_method', 'GET') }}
        {{ Form::submit('Make New Author', array('class' => 'btn')) }}
    {{ Form::close() }}
    <br />
     <table>
       <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Dept.</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         @foreach ($authors as $author)
           <tr>
             <td><a href="{{ URL::to('admin/authors/' . $author->id . '/edit/') }}">{{ $author->id}}</td>
             <td><a href="{{ URL::to('admin/authors/' . $author->id . '/edit/') }}">{{ $author->name }}</td>
             <td><a href="{{ URL::to('admin/authors/' . $author->id . '/edit/') }}">{{ $author->department }}</td>
             <td>
               {{ Form::open(array('url' => 'admin/authors/' . $author->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Author', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
             </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@stop
