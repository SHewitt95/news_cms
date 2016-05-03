@extends('layout.homeLayout')

@include('layout.header')
@include('layout.homeNav')

@section('content')
<div class="photoGallery">

<!-- http://bxslider.com/ -->
  <ul class="bxslider">
    @foreach ($photos as $photo)
      <li><img src="{{$photo->img_link}}" /></li>
    @endforeach
  </ul>

</div> <!-- End photoGallery -->

<div class="postList">

  <h2 class="postList-title">All Posts</h2>
  @foreach ($posts as $post)
  <div class="post">
    <h3>{{ $post->headline }}</h3>
    <h4>{{ str_limit($post->body_text, 100) }}</h4>
  </div>
  @endforeach

</div> <!-- End postList -->

<!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script-->
<script src="C:\wamp\www\news_cms\public\js\jquery.min.js"></script>
@stop


<!--DOCTYPE html-->
<!--html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                /*vertical-align: middle;*/
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .links ul {
              list-style: none;
            }

            .links ul li {
              font-size: 48px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">All the News</div>
                <div class="links">
                  <ul>
                    <li>News</li>
                    <li>More News</li>
                    <li>All the News</li>
                    <li><a href="/admin">Login</a></li>
                  </ul>
                </div>
            </div>
        </div>
    </body>
</html-->
