<!-- header start -->
<header class="lg:container mx-auto bg-transparent px-8">
  <div class="header-container">
   <a href="{{ route("home") }}" class="logo">
    <i class="fas fa-laptop-code"></i>
    {{-- <img src="{{ asset("/img/logo.png") }}" alt="">  --}}
    Deve<span>loopy</span></a>
    <div class="hidden sm:flex gap-6 font-semibold text-lg text-slate-600 ">
      <a class="hover:text-green-700 {{ Request::is("/") ? "active" : "" }}" href="{{ route("home") }}" >Home</a>
      <a class="hover:text-green-700 {{ Request::is("category*") ? "active" : "" }}" href="/category">Category</a>
      <a class="hover:text-green-700 {{ Request::is("about*") ? "active" : "" }}" href="">About</a>
    </div>
    <div class="flex sm:hidden flex-1 justify-end">
      <i class="text-2xl fas fa-bars"></i>
    </div>
  </div>
</header>
<!-- header end -->