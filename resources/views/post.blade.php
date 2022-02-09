@extends('layouts.main')    

@section('container')    
    {{-- <!-- single post start -->
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
    <!-- single post end --> --}}

    {{-- single post start --}}

    <section class="lg:container bg-white lg:bg-transparent lg:w-3/4 mt-28 mb-5 px-8">
      <div class="lg:bg-white lg:rounded lg:py-6 lg:px-9">
        <div class="flex my-3 items-center gap-2">
          <img class="rounded-full w-12 h-12" src="/../img/me.jpg" alt="profil" />
            <div class="">
              <span class="text-green-600 text-lg">{{ $post->author->name }}</span>
              <span class="block">{{ $post->created_at->diffForHumans() }}</span>
          </div>
        </div>
        <h1 class="text-2xl md:text-4xl font-bold my-10">{{ $post->title }}</h1>
        <img src="{{ asset("storage/" . $post->image) }}" alt="thumbnail">
        <div class="my-10 text-xl text-slate-700">{!! $post->body !!}</div>
      </div>
    </section>

    {{-- single post end --}}
    
@endsection

