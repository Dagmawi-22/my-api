<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <style>
      nav a{
        padding:.6rem;
        color:black;
      }
    </style>

  </head>

<body>
  <div class="container mt-4">
      @yield('content')
</div>  
</body>
</html>