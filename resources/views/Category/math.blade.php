@extends('layouts.main')

@section('container')

    <section class="lg:container mx-auto mt-24 mb-36 px-8">
      <div class="mb-6 text-lg font-semibold text-slate-500"><a href="{{ route("home") }}" class="hover:text-slate-700"><i class="fas fa-home mr-2"></i>Beranda</a></div>
        <h2 class="text-4xl font-bold text-green-700">Kategori Matematika : </h2>
          <div class="flex gap-4 my-10">
            <a class="w-[90px] h-[80px] bg-white" href="">
              <img class="w-full h-[80px] bg-center" src="{{ asset('img/nilai-mutlak.png') }}" alt="">
              <h3 class="text-lg text-center my-2 hover:text-green-700 hover:underline">Nilai Mutlak</h3>
            </a>
          </div>
    </section>
    <!-- category end -->
@endsection