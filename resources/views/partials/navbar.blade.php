<!-- header start -->
  <header class="fixed top-0 left-0 px-8 lg:px-0 w-full bg-white/90 backdrop-blur-sm shadow">

    <div class="lg:container lg:w-5/6 mx-auto flex items-center bg-transparent justify-between lg:px-0 blur-none">
    <a href="{{ route("home") }}">
      <i class="fas fa-laptop-code text-green-700 text-2xl"></i>
      <h3 class="text-2xl inline">Deve</h3><span class="text-green-700 text-2xl">loopy</span></a>

      <div class="hidden sm:flex gap-6 font-semibold text-lg text-slate-600 ">
        <a class="hover:text-green-700 {{ Request::is("/") ? "active" : "" }}" href="{{ route("home") }}" >Beranda</a>
        {{-- <a class="hover:text-green-700 {{ Request::is("category*") ? "active" : "" }}" id="navbar-kategori" href="javascript:;">Kategori <i class="fas fa-angle-down"></i></a> --}}
        <div class="group relative pb-4">
          <button class="text-slate-600 font-semibold text-lg group-hover:text-black">Kategory</button>
          <div class="hidden kategory-content w-48 absolute top-[2.6rem] pt-5 bg-white group-hover:block -z-10">
            <a class="block p-4 hover:bg-gray-400 hover:text-slate-100" href="{{ route('show-math') }}">Matematika</a>
            <a class="block p-4 hover:bg-gray-400 hover:text-slate-100" href="{{ route('show-programming') }}">Programming</a>
            <a class="block p-4 hover:bg-gray-400 hover:text-slate-100" href="{{ route('show-english') }}">Bahasa Inggris</a>
          </div>
        </div>
        <a class="hover:text-green-700 {{ Request::is("about*") ? "active" : "" }}" href="">Tentang</a>
      </div>

      <div class="flex sm:hidden flex-1 justify-end">
        <i class="text-2xl fas fa-bars"></i>
      </div>

      {{-- <div class="absolute py-4 rounded shadow-lg bg-white right-8 top-14 text-center list-none" id="carousel-kategori" style="">
        <ul>
          <a href=""><li class="py-4 px-12 text-lg hover:bg-slate-300 hover:text-slate-600 font-semibold">Programming</li></a>
          <a href=""><li class="py-4 px-12 text-lg hover:bg-slate-300 hover:text-slate-600 font-semibold">Matematika</li></a>
          <a href=""><li class="py-4 px-12 text-lg hover:bg-slate-300 hover:text-slate-600 font-semibold">Bahasa Inggris</li></a>
        </ul>  
      </div> --}}

    </div>
  </header>
<!-- header end -->
@push('script')
    <script type="text/javascript">
      const kategori = document.getElementById("navbar-kategori");
      const carousel_kategori = document.getElementById("carousel-kategori");

      // kategori.addEventListener("click", function () {
      //   carousel_kategori.classList.toggle("hidden");
      //   });
    </script>
@endpush