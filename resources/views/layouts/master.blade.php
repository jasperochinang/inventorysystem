<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    

  </head>
  <body>

   
     <script src="{{ asset('js/jquery-slim.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}" ></script>
      <script src="{{ asset('js/bootstrap.min.js') }}" >
      </script>
      <script type="text/javascript" src='/js/vue.js'></script>
    @yield('content')
  </body>
    @yield('scripts')
</html>