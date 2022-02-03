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
    <!-- post article end --> 
@endsection