<!Doctype html>
<html>
  <head>
    <title>@yield('title')</title>


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>



    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
  </body>

</html>