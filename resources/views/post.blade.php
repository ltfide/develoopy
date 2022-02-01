@extends('layouts.main')    

@section('container')    
    <!-- single post start -->
    <section class="single-post" id="single-post">
      <div class="container-single-post">
        <div class="content-single-post">
          <h1>{{ $post->title }}</h1>
          <div class="detail">
            <img src="/../img/me.jpg" alt="profil" />
            <span class="author">{{ $post->author->name }}</span>
            <span>{{ $post->created_at->diffForHumans() }}</span>
          </div>
          <img src="{{ asset("storage/" . $post->image) }}" class="thumb" alt="thumbnail" />
          <p>{!! $post->body !!}</p>
        </div>
      </div>
    </section>
    <!-- single post end -->
    
@endsection

