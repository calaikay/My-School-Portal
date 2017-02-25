<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
         <meta charset="utf-8">
  <link rel="stylesheet" href="/css/style1.css">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css.map">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.css.map">
  <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/main.css')}}">
         </head>
    <body>



      


       @yield('content')

     <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>﻿
      <script src="{{ URL::to('src/js/app.js') }}"></script>
    </body>
</html>
