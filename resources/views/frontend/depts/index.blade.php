@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Departments</div>
 <div class="content">
   {{ Form::open(array('url' => '/admin/departments/create', 'class' => 'pull-left')) }}
        {{ Form::hidden('_method', 'GET') }}
        {{ Form::submit('Make New Department', array('class' => 'btn')) }}
    {{ Form::close() }}
    <br />
     <table>
       <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         @foreach ($depts as $dept)
           <tr>
             <td><a href="{{ URL::to('admin/departments/' . $dept->id . '/edit/') }}">{{ $dept->id}}</td>
             <td><a href="{{ URL::to('admin/departments/' . $dept->id . '/edit/') }}">{{ $dept->name }}</td>
             <td>
               {{ Form::open(array('url' => 'admin/departments/' . $dept->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Department', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
             </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@stop
