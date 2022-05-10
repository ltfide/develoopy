@extends('layouts.main')    

@section('container')
    <nav class="mt-16 mb-5 w-full bg-[#219150] px-8 lg:px-0">
      <section class="lg:container lg:w-5/6 mx-auto flex flex-1 lg:px-0 flex-col-reverse lg:flex-row justify-between items-center">
        <div class="lg:w-1/3 text-center lg:text-left py-8">
          <h1 class="text-white text-5xl lg:text-6xl font-bold">Develoopy</h1>
          <p class="lg:text-2xl text-xl my-6 text-white">Coretan tentang <a class="underline" href="{{ route('show-programming') }}">Programming</a>, <a href="{{ route('show-math') }}" class="underline">Matematika</a> dan <a href="{{ route('show-english') }}" class="underline">Bahasa Inggris.</a></p>
          <a class="py-3 px-4 rounded shadow bg-white" href="#artikel">Mulai Belajar</a>
        </div>
        <img class="hidden sm:block bg-right py-8  h-96 " src="{{ asset("/img/programmer.svg") }}" alt="">
      </section>
    </nav>

    <section class="lg:py-28 px-8 lg:px-0" id="artikel">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
        <h1 class="text-center text-4xl text-slate-600 font-bold"  >POST Terbaru</h1>
        <div id="post-view"></div>
      </div>  
      <input type="hidden" name="hidden_page" id="hidden_page" value="1">
    </section>

    <section class="lg:py-10 px-8 lg:px-0" id="category">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">
        <h1 class="text-center text-slate-600 text-4xl font-bold mb-8">Pilih Kategori</h1>
        <div class="bg-white py-8 px-6 shadow-lg rounded-lg my-10">
          <div class="flex items-center gap-4 justify-center">
            <div class="w-32">
              <a href="">
                <img class="w-full" src="{{ asset('img/js-logo.png') }}" alt="" title="JAVASCRIPT">
              </a>
            </div>
            <div class="w-32">
              <a href="">
                <img class="w-full" src="{{ asset('img/js-logo.png') }}" alt="" title="JAVASCRIPT">
              </a>
            </div>
            <div class="w-32">
              <a href="">
                <img class="w-full" src="{{ asset('img/js-logo.png') }}" alt="" title="JAVASCRIPT">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('js/index.js') }}"></script>
@endpush

