@extends('layouts.main')    

@section('container')
    <nav class="mt-16 mb-5 w-full bg-[#219150] px-8 lg:px-0">
      <section class="lg:container lg:w-5/6 mx-auto flex flex-1 lg:px-0 flex-col-reverse lg:flex-row justify-between items-center">
        <div class="lg:w-1/3 text-center lg:text-left py-8">
          <h1 class="text-white text-5xl lg:text-6xl font-bold">Develoopy</h1>
          <p class="lg:text-2xl text-xl my-6 text-white">Coretan tentang <a class="underline" href="">Programming</a>, <a href="" class="underline">Matematika</a> dan <span class="underline">Bahasa Inggris.</span></p>
          <a class="py-3 px-4 rounded shadow bg-white" href="">Mulai Belajar</a>
        </div>
        <img class="hidden sm:block bg-right py-8  h-96 " src="{{ asset("/img/programmer.svg") }}" alt="">
      </section>
    </nav>

    <section class="px-8 lg:px-0">
      <div class="lg:container lg:w-5/6 mx-auto bg-white rounded-3xl lg:my-10 py-6 shadow-lg">
        <h1 class="text-center text-4xl text-slate-600 font-bold">Semua Kategori</h1>
        <div class="my-10 flex justify-center items-center gap-6">
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in" title="Nilai Mutlak"><img class="w-full h-full" src="{{ asset("img/nilai-mutlak.png") }}" alt=""></a>
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in "><img class="w-full h-full" src="{{ asset("img/html-logo.png") }}" alt=""></a>
          <a href="" class="w-24 h-24 p-2 content-box hover:border hover:shadow hover:rounded hover:transition duration-700 ease-in "><img class="w-full h-full" src="{{ asset("img/laravel-logo.png") }}" alt=""></a>
        </div>
      </div>
    </section>

    <section class="lg:my-10 px-8 lg:px-0" id="artikel">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
        <h1 class="text-center text-4xl text-slate-600 font-bold"  >Artikel Terbaru</h1>
        <div  id="post-view"></div>
      </div>  
      <input type="hidden" name="hidden_page" id="hidden_page" value="1">
    </section>
@endsection

@push('script')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush

