<!-- header start -->
<header>
  <div class="header-container">
   <a href="{{ route("home") }}"><h2 class="logo">Space <span>Dev</span></h2></a>
    <div class="menu">
      <a href="{{ route("home") }}" class="{{ Request::is("/") ? "active" : "" }}">Home</a>
      <a href="/category" class="{{ Request::is("category*") ? "active" : "" }}">Category</a>
      <a href="" class="{{ Request::is("about") ? "active" : "" }}">About</a>
    </div>
  </div>
</header>
<!-- header end -->