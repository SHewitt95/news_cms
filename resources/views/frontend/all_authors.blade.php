@extends('layout.layout')

@include('layout.header')
@include('layout.nav')

@section('content')
<div class="title">Authors</div>
 <div class="content">
   <!--a href="/admin/new_author"><button>Add New</button></a-->

     <!--div class="">{!! $authors[0]->name !!}</div-->
     <table>
       <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Dept.</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($authors as $author)
           <tr>
             <td>{{ $author->id}}</td>
             <td>{{ $author->name }}</td>
             <td>{{ $author->department }}</td>
           </tr>
         @endforeach
       </tbody>
     </table>
 </div>
@stop
