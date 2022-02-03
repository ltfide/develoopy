<!-- header start -->
<header>
  <div class="header-container">
   <a href="{{ route("home") }}" class="logo">
    <i class="fas fa-laptop-code"></i>
    {{-- <img src="{{ asset("/img/logo.png") }}" alt="">  --}}
    Deve<span>loopy</span></a>
    <div class="menu">
      <a href="{{ route("home") }}" class="{{ Request::is("/") ? "active" : "" }}">Home</a>
      <a href="/category" class="{{ Request::is("category*") ? "active" : "" }}">Category</a>
      <a href="" class="{{ Request::is("about") ? "active" : "" }}">About</a>
    </div>
  </div>
</header>
<!-- header end -->