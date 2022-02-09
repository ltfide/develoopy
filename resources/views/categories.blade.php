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

    <section class="mt-28 mb-36">
      <div>
        <h2 class="text-3xl font-bold text-green-700">All Category : </h2>
          <div class="flex gap-4 my-10">
            @foreach ($categories as $category)
              <a href="/category/{{ $category->slug }}">
                <div class="w-36 h-36 py-4 px-4 hover:bg-white relative">
                  <img class="w-3/4  mx-auto" src="/..{{ $category->category_logo }}" alt="">
                  <h3 class="w-full  mt-3 absolute text-center bottom-1 left-0 ">{{ $category->name }}</h3>
                </div>
              </a>
            @endforeach
          </div>
      </div>
    </section>
    <!-- category end -->
@endsection