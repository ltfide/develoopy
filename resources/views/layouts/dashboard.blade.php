<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/dashboard.css" />
    <link rel="stylesheet" href="/css/dashboard-create.css" />
    <link rel="stylesheet" href="/fontawesome/css/all.css" />
    <link rel="stylesheet" href="/css/trix.css" />
    <script src="/js/trix.js"></script>
  </head>
  <body>

    @include('partials.dashboard-navbar')

    @yield('container-dashboard')

  </body>
</html>