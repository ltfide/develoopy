@extends('layouts.main')    

@section('container')
    {{-- <!-- navbar start -->
     <nav class="navbar" id="navbar">
      <div class="navbar-container">
        <h2 class="text-navbar"></h2>
        <a href="#posts" class="btn">Get Started</a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- post article start -->
    <section class="posts" id="posts">
      <div class="container-posts">
        <div class="layout-posts">
          <h1 class="heading">New Posts</h1>
          @foreach ($data as $row)
          <div class="box-post">
            <img src="{{ asset("storage/" . $row->image) }}" alt="" />
            <div class="content">
              <h3><a href="/post/{{ $row->slug }}" class="title">{{ $row->title }}</a></h3>
              <p>{!! $row->excerpt !!}</p>
            </div>
            <a href="/category/{{ $row->category->name }}" class="category">{{ $row->category->name }}</a>
          </div>
          @endforeach
          <div class="pagination-posts">
            {{ $data->links() }}
          </div>
        </div>
        <div class="category-posts">
          <h2 class="text">Follow Us</h2>
          <a href="https://web.facebook.com/lupi.6lima/" class="supp facebook" target="__blank">
            <i class="fab fa-facebook-square"></i> 
            <span> Facebook</span></a>
          <a href="https://github.com/ltfide" class="supp github" target="__blank">
            <i class="fab fa-github-square"></i>
            <span>Github</span></a>
          <a href="https://instagra.com/ltfide" class="supp instagram" target="__blank"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
      </div>
    </section>
    <!-- post article end --> --}}

    <nav class="mt-16 mb-5 w-full bg-[#219150] px-8">
      <section class="lg:container mx-auto flex flex-1 flex-col-reverse lg:flex-row justify-between items-center">
        <div class="lg:w-1/2 text-center lg:text-left py-8">
          <h1 class="text-white text-5xl lg:text-6xl font-bold">Develoopy</h1>
          <p class="lg:text-2xl text-xl my-6 text-white">Sebuah tempat belajar seputar <a class="underline" href="{{ route("category-programming") }}">Programming</a>, <span class="underline">Matematika</span> dan <span class="underline">Bahasa Inggris.</span></p>
          <a class="py-3 px-4 rounded shadow bg-white" href="#">Mulai Belajar</a>
        </div>
        <img class="hidden sm:block bg-right py-8  h-96 " src="{{ asset("/img/programmer.svg") }}" alt="">
      </section>
    </nav>

    <section class="px-8">
      <div class="lg:container mx-auto bg-white rounded-3xl lg:my-10 py-6 shadow-lg">
        <h1 class="text-center text-2xl text-slate-600 font-bold">Semua Kategori</h1>
        <div class="my-10 flex justify-center items-center gap-6">
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in "><img class="w-full h-full" src="{{ asset("img/js-logo.png") }}" alt=""></a>
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in "><img class="w-full h-full" src="{{ asset("img/html-logo.png") }}" alt=""></a>
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in "><img class="w-full h-full" src="{{ asset("img/laravel-logo.png") }}" alt=""></a>
        </div>
      </div>
    </section>

    <section class="lg:my-10 px-8">
      <div class="lg:container mx-auto">
        <h1 class="text-center text-2xl text-slate-600 font-bold">Artikel Terbaru</h1>
        <div class="grid grid-cols-1 gap-8 my-7 lg:grid-cols-3">
          @foreach ($data as $row)            
            <div class="border  rounded shadow-lg">
              <a href="/post/{{ $row->slug }}"><img class="my-4 px-0 w-full sm:h-60 lg:h-52" src="{{ asset("storage/" . $row->image) }}" alt=""></a>
              <a class="block text-left px-6 text-xl text-slate-600 font-semibold hover:underline" href="/post/{{ $row->slug }}">{{ $row->title }}</a>
              <p class="px-6 my-4">{{ $row->excerpt }}</p>
            </div>
          @endforeach
        </div>
      </div>  
    </section>

    <section class="text-center">
      {{ $data->links() }}
    </section>
    
@endsection

