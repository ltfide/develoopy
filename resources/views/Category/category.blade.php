@extends('layouts.main')

@section('container')
 <!-- post article start -->
    <section class="mt-24 mb-36 px-8 lg:px-0">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
        <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a> > <a href="{{ route("programming-category") }}">Kategori</a></div>
        <h2 class="text-4xl font-bold text-green-700">{{ $title }} :</h2>
          <div class="grid grid-cols-1 gap-8 my-7 lg:grid-cols-4">
            @foreach ($categories as $row)            
              <div class="border  rounded shadow-lg">
                <a href="/post/{{ $row->slug }}"><img class="my-4 px-0 w-full sm:h-60 lg:h-52" src="{{ asset("storage/" . $row->image) }}" alt=""></a>
                <a class="block text-left px-6 text-xl text-slate-600 font-semibold hover:underline" href="/post/{{ $row->slug }}">{{ $row->title }}</a>
                {{-- <p class="px-6 my-4">{{ $row->excerpt }}</p> --}}
              </div>
            @endforeach
          </div>
      </div>
    </section>
<!-- post article end --> 
@endsection