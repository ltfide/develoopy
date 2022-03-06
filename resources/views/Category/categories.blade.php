@extends('layouts.main')

@section('container')
<!-- category start -->
    <section class="mx-auto mt-24 mb-36 px-8 lg:px-0">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
        <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a></div>
          <h2 class="text-4xl font-bold text-green-700">All Category : </h2>
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 my-10">
          @foreach ($categories as $category)
            <a class="relative shadow-lg" href="{{ route('programming-category') }}">
              <img src="{{ asset($category->category_logo) }}" alt="">
              <h3 class="absolute top-1/2 w-full bg-white -translate-y-1/2 p-4 text-center text-3xl hover:text-green-700">{{ $category->name }}</h3>
            </a>
          @endforeach
        </div>
      </div>
    </section>
<!-- category end -->
@endsection