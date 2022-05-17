<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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

   @include('dashboard.partials.navbar')

   <section class="ml-0 pl-4 pr-8 md:ml-56 md:px-10">
      @yield('content-dashboard')
   </section>

   {{-- <section class="ml-6 mr-6 mt-4 lg:ml-64 lg:mt-24 lg:mr-6">
      @yield('content-dashboard')
   </section> --}}

   

   @stack('scripts')

</body>
</html>