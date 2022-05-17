{{-- @extends('dashboard.layouts.dashboard')

@section('content-dashboard')
   <div class="container mx-auto">
      <div class="bg-white mx-auto rounded shadow p-3 w-3/4">
      <h1 class="text-2xl font-medium text-slate-700">Edit Data Post</h1>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
         @method("PUT")
         @csrf
         <input class="w-full my-4" type="text" placeholder="Title" name="title" value="{{ old("title", $post->title) }}"/> --}}
         {{-- <input class="block" type="text" placeholder="Excerpt" name="excerpt" id="excerpt" value="{{ old("excerpt", $post->excerpt) }}"/> --}}
         {{-- <select class="block" name="sub_category_id" id="category_id">
            @foreach ($categories as $category)
            @if (old("sub_category_id", $post->sub_category_id) == $category->id) 
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
         </select>
         <input class="my-4" type="hidden" name="oldImage" value="{{ $post->image }}">
         <img class="my-4 h-20 bg-cover bg-center" src="{{ asset("storage/" . $post->image ) }}" alt="">
         <input class="mb-4" type="file" name="image" />
         <textarea id="summernote" name="body">{{ old("body", $post->body) }}</textarea>
         <button type="submit" class="mt-4 py-2 px-4 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow">Update</button>
      </form>
      </div>
   </div> --}}
{{-- @endsection --}}

@extends('dashboard.layouts.dashboard')

@push('styles')
   <style>
      .note-editable {
         min-height: 20rem;
         font-family: Inter;
      }

      .note-editable.fullscreen-active {
         background-color: white;
      }

      .note-editable > p {
         color: #334155;
      }
   </style>
@endpush

@section('content-dashboard')
    
   <div class="container">
      <div class="rounded mx-auto p-3 pt-0">
      <h1 class="text-xl text-slate-700 mb-3">Edit Data POST</h1>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
         @method('PUT')
         @csrf

         <div class="flex items-center gap-3" id="inputs">
            
            <div class="my-4 w-1/2">
               <input type="text" class="w-full rounded outline-none border border-slate-400" name="title" placeholder="title" value="{{ old("title", $post->title) }}">
            </div>

            <div class="w-1/2">
               <select class="block w-full rounded outline-none border border-slate-400" name="sub_category_id" id="category_id">
                  @foreach ($categories as $category)
                     @if (old("sub_category_id", $post->sub_category_id) == $category->id) 
                           <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                           <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endif
                  @endforeach
               </select>
            </div>

            <div class="my-4 w-1/2">
               <input class="my-4" type="hidden" name="oldImage" value="{{ $post->image }}">
               <input class="block cursor-pointer w-full px-3 py-1.5 text-gray-700 bg-white bg-clip-padding rounded transition ease-in-out m-0 border border-slate-400
               focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="formFile">
            </div>

         </div>

         <div>
            <img class="my-2 h-20 bg-cover bg-center shadow rounded" src="{{ asset("storage/" . $post->image ) }}" alt="">
         </div>

         <div> 
            <textarea id="summernote" name="body">{{ old("body", $post->body) }}</textarea>
         </div>
         <button class="mt-4 mx-auto block py-2 px-4 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow" type="submit" id="create">Edit</button>
      </form>
      </div>
   </div>

@endsection

@push('scripts')
   <script src="{{ asset('js/summernote.js') }}"></script>
@endpush