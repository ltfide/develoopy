@extends('layouts.main')

@section('container')
 <!-- post article start -->
    {{-- <section class="posts" id="posts">
      <div class="container-posts">
        <div class="layout-posts">
          <h1 class="heading">All {{ $title }} Category</h1>
          @foreach ($categories as $category)
          <div class="box-post">
            <img src="{{ asset("storage/" . $category->image) }}" alt="" />
            <div class="content">
              <a href="/post/{{ $category->slug }}" class="title">{{ $category->title }}.</a>
              <p>{{ $category->excerpt }}</p>
            </div>
            <a href="/category/{{ $title }}" class="category">{{ $title }}</a>
          </div>
          @endforeach
          <div class="pagination-posts">
            {{ $categories->links() }}
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
    </section> --}}

    <section class="mt-24 mb-36 px-8">
      <div class="lg:container mx-auto">
        <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a> > <a href="{{ route("category-programming") }}">Kategori</a> > Roadmap {{ $title }}</div>
        <h2 class="text-3xl font-bold text-green-700">Roadmap {{ $title }} :</h2>
          <div class="grid grid-cols-1 gap-8 my-7 lg:grid-cols-3">
            @foreach ($categories as $row)            
              <div class="border  rounded shadow-lg">
                <a href="/post/{{ $row->slug }}"><img class="my-4 px-0 w-full sm:h-60 lg:h-52" src="{{ asset("storage/" . $row->image) }}" alt=""></a>
                <a class="block text-left px-6 text-xl text-slate-600 font-semibold hover:underline" href="/post/{{ $row->slug }}">{{ $row->title }}</a>
                <p class="px-6 my-4">{{ $row->excerpt }}</p>
              </div>
            @endforeach
          </div>
      </div>
    </section>
    <!-- post article end --> 
@endsection