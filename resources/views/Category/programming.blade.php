@extends('layouts.main')

@section('container')

    <section class="lg:py-28 px-8 lg:px-0" id="artikel">
      <div class="lg:container mx-auto lg:px-0 lg:w-5/6">

        <h1 class="text-4xl text-slate-600 font-bold"  >Kategori : Programming</h1>
        <p class="text-lg text-slate-500 font-medium my-4">Total Post : {{ $programmingData->count() }}</p>

        <div id="post-view">
          <div class="grid grid-cols-1 gap-8 lg:gap-4 my-7 md:grid-cols-2 lg:grid-cols-4">

            @foreach ($programmingData as $row)            
              <div class="border h-96 min-h-full rounded shadow-lg relative">

                <a href="/post/{{ $row->slug }}"><img class="my-4 px-0 border border-slate-200 w-full h-60 lg:h-52 bg-cover bg-center object-cover" src="{{ asset("storage/" . $row->image) }}" alt=""></a>

                <a class="block text-left px-6 text-xl text-slate-600 font-semibold hover:underline" href="/post/{{ $row->slug }}">{{ $row->title }}</a>

                <a class="inline-block px-6 py-1 bg-green-600 rounded text-white absolute bottom-4 left-0 border shadow hover:bg-green-700" id="btn" href="/category/{{ $row->category->slug ?? ""}}">{{ $row->field}}</a>

                <span class="text-lg absolute bottom-4 right-0 border shadow">{{ $row->created_at }}</span>
              </div>
            @endforeach

            </div>

            <section class="text-center mt-16 pagination">
              {{-- {{ $programmingData->links() }} --}}
            </section>

        </div>
        
      </div>  
      <input type="hidden" name="hidden_page" id="hidden_page" value="1">
    </section>
    

@endsection