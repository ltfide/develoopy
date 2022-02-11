<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $post->title ?? "Develoopy" }}</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset("/img/brackets.png") }}">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    {{-- <link rel="stylesheet" href={{ asset("/css/post.css") }} /> --}}
    {{-- <link rel="stylesheet" href={{ asset("/css/category.css") }} /> --}}
    <link rel="stylesheet" href="{{ asset("/fontawesome/css/all.css") }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            container: {
            padding: "8rem",
            center: true,
            screens: {
              lg: "1124px",
              xl: "1124px",
              md: "768px",
              "2xl": "1124px",
            },
          },
          }
        }
      }
    </script>
  </head>
  <body class="bg-[#F8F9FA]">
    
    @include('partials.navbar')

    @yield('container')


    @include('partials.footer')

    <script src="script.js"></script>
  </body>
</html>