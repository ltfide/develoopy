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
      <div class="lg:bg-white lg:shadow lg:rounded lg:py-6 lg:px-9 mb-8">
        <div class="flex my-3 items-center gap-2">
          <img class="rounded-full w-8 h-8 border border-green-600" src="/../img/me.jpg" alt="profil" />
              <span class="text-green-600 text-lg">{{ $post->author->name }} |</span>
              <span class="text-slate-600 text-lg">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h1 class="text-2xl md:text-4xl font-bold my-10">{{ $post->title }}</h1>
        <img class="w-full h-[350px] border bg-contain shadow bg-center" src="{{ asset("storage/" . $post->image) }}" alt="thumbnail">
        <div id="post">{!! $post->body !!}</div>
      </div>
      <div id="disqus_thread"></div>
      
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </section>
    {{-- single post end --}}
    
    
@endsection

