@extends('layouts.main')    

@section('container')
    <!-- navbar start -->
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
    <!-- post article end -->

    
@endsection

