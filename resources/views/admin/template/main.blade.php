<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','default')</title>
    <link rel="stylesheet" href={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css")}} integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet"  href="{{asset('chosen2/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
</head>
   <body>
      @include('admin.template.partials.nav')
      
      <div class="container"> <a class="btn btn-info">Fecha: <?=date('m/d/Y');?></a></div>
   
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('css/app.css')}}"></script>
    <script src="{{asset('chosen2/chosen.jquery.js')}}"></script>

    @yield('js')
   </body>
</html>