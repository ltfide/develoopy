<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Space Dev</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href={{ asset("/css/post.css") }} />
    <link rel="stylesheet" href={{ asset("/css/category.css") }} />
    <link rel="stylesheet" href="{{ asset("/fontawesome/css/all.css") }}">
  </head>
  <body>
    
    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script src="script.js"></script>
  </body>
</html>