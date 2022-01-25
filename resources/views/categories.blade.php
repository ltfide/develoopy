@extends('layouts.main')

@section('container')
    <!-- category start -->
    <section class="category" id="category">
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
    </section>
    <!-- category end -->
@endsection