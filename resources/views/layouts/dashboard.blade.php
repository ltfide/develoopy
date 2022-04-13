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
      $(document).ready(function () {
        $("#summernote").summernote();
      });

      window.addEventListener('showModal', event => {
            $('.modal-open').on('click', toggleModal())
        });


      var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
    
     
    </script>
    @stack('scripts')
  </body>
</html>