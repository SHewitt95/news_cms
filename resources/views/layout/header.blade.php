@section('head')
<head>
    <title>All The News</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://159.203.74.152/css/jquery.bxslider.css" rel="stylesheet" />
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
        text-align: left;
        display: inline-block;
        font-family: sans-serif;
    }

    .title {
        font-size: 96px;
        font-family: 'Lato';
        margin-bottom: 0.5em;
    }

    a {
      color: black;
    }

    table {
      margin-bottom: 2em;
    }

    table tbody tr td, table thead tr th {
      padding: 1em 5em;
    }

    table tbody tr td img {
      width: 100%;
      height: 75%;
    }

    input, textarea, button, select {
      display: block;
      margin-bottom: 2em;
    }

    a button {
      margin: 0;
    }

    ul.navbar-nav {
      font-size: 2em;
    }

    .main-logo {
      display: block;
    }

    .postList {
      width: 50%;
      text-align: left;
      margin: 1em auto;
      font-family: sans-serif;
      border: 1px solid black;
      border-radius: 1em;
      padding: 1em;
    }

    .postList .post {
      margin-bottom: 3em;
    }

    h2.postList-title {
      text-align: center;
    }

    div.photoGallery {
      width: 50%;
      margin: 1em auto;
      font-family: sans-serif;
    }
    </style>
</head>
@stop
