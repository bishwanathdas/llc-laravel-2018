<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>LLC Laravel Homepage</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href=" {{ url('css/bootstrap.min.css') }} " >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href=" {{ url('css/product.css') }} " >


    @yield('styles')


  </head>

  <body>

@include('partials._header')


@yield('content')


@include('partials._footer')




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=" {{ url('js/jquery-3.2.1.slim.min.js') }} " ></script>
    <script src=" {{ url('js/popper.min.js') }} "></script>
    <script src=" {{ url('js/bootstrap.min.js') }} "></script>
    <script src=" {{ url('js/holder.min.js') }} "></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

    @yield('scripts')

  </body>
</html>

