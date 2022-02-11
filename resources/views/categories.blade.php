@extends('layouts.main')

@section('container')
    <!-- category start -->
    {{-- <section class="category" id="category">
      <h2 class="title-category">Category :</h2>
      <div class="container-category">
        @foreach ($categories as $category)            
        <a href="/category/{{ $category->slug }}">
          <div class="box-category">
            <img src="/..{{ $category->category_logo }}" class={{ $category->name == "PHP" ? "php" : "" }} alt="" />
            <h3>{{ $category->name }}</h3>
          </div>
        </a>
        @endforeach
      </div>
    </section> --}}

    <section class="lg:container mx-auto mt-24 mb-36 px-8">
      <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a></div>
        <h2 class="text-4xl font-bold text-green-700">Kategori Programming : </h2>
          <div class="flex gap-4 my-10">
            @foreach ($categories as $category)
              {{-- <a href="/category/programming/{{ $category->slug }}"> --}}
                <a href="{{ route("show-programming", $category->slug) }}">
                <div class="w-32 h-32 min-h-full py-4 px-2 hover:bg-white hover:rounded hover:shadow relative">
                  <img class="w-3/4 mx-auto mb-2" src="/..{{ $category->category_logo }}" alt="">
                  <h3 class="w-full  mt-3 absolute text-center bottom-1 left-0 ">{{ $category->name }}</h3>
                </div>
              </a>
            @endforeach
          </div>
    </section>
    <!-- category end -->
@endsection