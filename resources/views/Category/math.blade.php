@extends('layouts.main')

@section('container')

<section class="mx-auto mt-24 mb-36 px-8 lg:px-0">
  <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
  <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a></div>
    <h2 class="text-4xl font-bold text-green-700">Kategori {{ $title }} : </h2>
      <div class="flex gap-4 my-10">
        @foreach ($categories as $category)
            <a class="w-[90px] h-[80px]" href="{{ route('show-programming', $category->slug) }}">
              <img class="w-full h-[80px] bg-center" src="{{ asset($category->programming_logo) }}" alt="">
              <h3 class="text-lg text-center my-2 hover:text-green-700 hover:underline">{{ $category->name }}</h3>
            </a>
        @endforeach
      </div>
  </div>
</section>
    <!-- category end -->
@endsection