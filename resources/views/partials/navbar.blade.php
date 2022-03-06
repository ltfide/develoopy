<!-- header start -->
  <header class="fixed top-0 left-0 px-8 lg:px-0 w-full bg-white/90 backdrop-blur-sm">
    <div class="lg:container lg:w-5/6 mx-auto flex items-center bg-transparent justify-between lg:px-0 blur-none relative z-50">
    <a href="{{ route("home") }}">
      <i class="fas fa-laptop-code text-green-700 text-2xl"></i>
      <h3 class="text-2xl inline">Deve</h3><span class="text-green-700 text-2xl">loopy</span></a>
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