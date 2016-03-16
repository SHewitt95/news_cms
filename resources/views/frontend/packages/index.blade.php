@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Packages</div>
 <div class="content">
   {{ Form::open(array('url' => '/admin/packages/create', 'class' => 'pull-left')) }}
        {{ Form::hidden('_method', 'GET') }}
        {{ Form::submit('Make New Package', array('class' => 'btn')) }}
    {{ Form::close() }}
    <br />
     <table>
       <thead>
         <tr>
           <th>ID</th>
           <th>Topic</th>
           <th></th>
         </tr>
       </thead>
       <tbody>
         @foreach ($packages as $package)
           <tr>
             <td><a href="{{ URL::to('admin/packages/' . $package->id . '/edit/') }}">{{ $package->id}}</td>
             <td><a href="{{ URL::to('admin/packages/' . $package->id . '/edit/') }}">{{ $package->topic }}</td>
             <td>
               {{ Form::open(array('url' => 'admin/packages/' . $package->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Package', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
             </td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@stop
