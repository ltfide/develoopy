@extends('layouts.dashboard2')

@section('content-dashboard')
   <div class="container mx-auto">
      <div class="bg-white mx-auto rounded shadow p-3 w-3/4">
      <h1 class="text-2xl font-medium text-slate-700">Edit Data POST</h1>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
         @method("PUT")
         @csrf
         <input class="w-full my-4" type="text" placeholder="Title" name="title" value="{{ old("title", $post->title) }}"/>
         {{-- <input class="block" type="text" placeholder="Excerpt" name="excerpt" id="excerpt" value="{{ old("excerpt", $post->excerpt) }}"/> --}}
         <select class="block" name="sub_category_id" id="category_id">
            @foreach ($categories as $category)
            @if (old("sub_category_id", $post->sub_category_id) == $category->id) 
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
         </select>
         <input class="my-4" type="hidden" name="oldImage" value="{{ $post->image }}">
         <img class="my-4" src="{{ asset("storage/" . $post->image ) }}" alt="">
         <input class="mb-4" type="file" name="image" />
         <textarea id="summernote" name="body">{{ old("body", $post->body) }}</textarea>
         <button type="submit" class="mt-4 py-2 px-4 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow">Update</button>
      </form>
      </div>
   </div>
@endsection