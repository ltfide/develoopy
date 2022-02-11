<!-- header start -->
<header class="fixed top-0 left-0 px-8">
  <div class="lg:container w-full mx-auto header-container">
   <a href="{{ route("home") }}" class="logo">
    <i class="fas fa-laptop-code"></i>
    {{-- <img src="{{ asset("/img/logo.png") }}" alt="">  --}}
    Deve<span>loopy</span></a>
    <div class="hidden sm:flex gap-6 font-semibold text-lg text-slate-600 ">
      <a class="hover:text-green-700 {{ Request::is("/") ? "active" : "" }}" href="{{ route("home") }}" >Beranda</a>
      <a class="hover:text-green-700 {{ Request::is("category*") ? "active" : "" }}" href="{{ route("all-category") }}">Kategori</a>
      <a class="hover:text-green-700 {{ Request::is("about*") ? "active" : "" }}" href="">Tentang</a>
    </div>
    <div class="flex sm:hidden flex-1 justify-end">
      <i class="text-2xl fas fa-bars"></i>
    </div>
  </div>
</header>
<!-- header end -->