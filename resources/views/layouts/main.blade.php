<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>{{ $post->title ?? "Develoopy" }}</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset("/img/brackets.png") }}">
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    {{-- <link rel="stylesheet" href={{ asset("/css/post.css") }} /> --}}
    {{-- <link rel="stylesheet" href={{ asset("/css/category.css") }} /> --}}
    <link rel="stylesheet" href="{{ asset("/fontawesome/css/all.css") }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <style>
      
    </style>
  </head>
  <body class="bg-[#F8F9FA]" id="body">

    @include('partials.navbar')

    @yield('container')


    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    
        <script>
          $(document).ready(function(){

            $(document).on('click','.pagination a',function(e){
                  e.preventDefault();
                 var pageNumber = $(this).attr('href').split('page=')[1];
                 $("#hidden_page").val(pageNumber);
                getMorePage(pageNumber)
            });


            function getMorePage(pageNumber){
              $.ajax({
                    type:"GET",
                    url:"/paginate-more-products-ajax/"+"?page="+pageNumber,
                  data:{},
                    success: function(data){
                      
                      $('#post-view').html(data)
                    },

                  })
            }
          
            getMorePage(1);

        });

        (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://develoopy.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
        </script>

  </body>
</html>