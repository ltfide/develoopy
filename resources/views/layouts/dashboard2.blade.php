<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link href="{{ asset("summernote/summernote-lite.css") }}" rel="stylesheet" />
   <script src="{{ asset("summernote/jquery.js")}}"></script>
   <script src="{{ asset("summernote/summernote-lite.js") }}"></script>
   <title>Dashboard</title>
   @stack('styles')
</head>
<body class="font-inter bg-[#F5F7FB]">

   @include('partials.dashboard-navbar2')

   <section class="ml-6 mr-6 mt-4 lg:ml-64 lg:mt-24 lg:mr-6">
      @yield('content-dashboard')
   </section>

   <script src="{{ asset('js/summernote.js') }}"></script>

   @stack('scripts')

</body>
</html>