@extends('layouts.main')

@section('container')
 <!-- post article start -->
    <section class="posts" id="posts">
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
          <h2 class="text">Support Us</h2>
          <a href="#" class="supp">Support</a>
        </div>
      </div>
    </section>
    <!-- post article end --> 
@endsection