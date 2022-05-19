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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset("summernote/summernote-lite.css") }}" rel="stylesheet" />
    <script src="{{ asset("/summernote/jquery.js")}}"></script>
    <script src="{{ asset("summernote/summernote-lite.js") }}"></script>
    @stack('styles')
    {{-- <link rel="stylesheet" href="/css/trix.css" />
    <script src="/js/trix.js"></script>
    <script src="/js/attachments.js"></script> --}}
    <style>
      /* .trix-content img {
        width: 50px;
        height: 50px;
      } */
      /* .form-create .container-create form img {
        width: 12rem;
      } */
      .note-editable {
        height: 20rem;
        font-family: "Inter";
      }
      .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
      
    </style>
  </head>
  <body>

    @include('partials.dashboard-navbar')

    <div class="pl-72 pt-24">
      @yield('container-dashboard')
    </div>

    <script>

    </script>
    @stack('scripts')
  </body>
</html>