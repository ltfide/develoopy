@extends('home.layouts.main')    

@section('container')    
{{-- single post start --}}
    <section class="lg:container bg-white lg:bg-transparent mx-auto lg:w-5/6 mt-28 px-8 lg:px-0">
        <div class="lg:w-3/4 w-full  mx-auto lg:rounded lg:py-6 lg:px-9 mb-8">
          <div class="flex my-3 items-center gap-2">
            <img class="rounded-full w-8 h-8 border border-green-600" src="/../img/me.jpg" alt="profil" />
                <span class="text-green-600 text-lg">{{ $post->author->name }} |</span>
                <span class="text-slate-600 text-lg">{{ $post->created_at->format("d F Y H:i") }}</span>
          </div>
          <h1 class="lg:text-[2.5rem] text-2xl md:text-4xl font-bold my-10">{{ $post->title }}</h1>
          <img class="w-full h-[350px] border mb-14 bg-cover shadow bg-center" src="{{ asset("storage/" . $post->image) }}" alt="thumbnail">
          <div id="post">{!! $post->body !!}</div>
       </div>
      {{-- <div id="disqus_thread"></div>
      
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> --}}
    {{-- <div class="lg:w-1/4 w-full lg:bg-white lg:shadow lg:py-6 lg:px-8 lg:rounded mb-8">
      <ul>
        
      </ul>
    </div> --}}
    </section>
{{-- single post end --}}
@endsection

