@extends('layouts.dashboard')

@section('container-dashboard')
<div class="form-create">
  <div class="container-create">
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
      @method("PUT")
      @csrf
      <input type="text" placeholder="Title" name="title" value="{{ old("title", $post->title) }}"/>
      <input type="text" placeholder="Excerpt" name="excerpt" id="excerpt" value="{{ old("excerpt", $post->excerpt) }}"/>
      <select name="category_id" id="category_id">
        @foreach ($categories as $category)
        @if (old("category_id", $post->category_id) == $category->id) 
         <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
         <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
      <input type="hidden" name="oldImage" value="{{ $post->image }}">
      <img src="{{ asset("storage/" . $post->image ) }}" alt="">
      <input type="file" name="image" />
      <input type="hidden" id="programming" name="body" value="{{ old("body", $post->body) }}"/>
      <trix-editor input="programming"></trix-editor>
      <button type="submit" class="create">Update</button>
    </form>
  </div>
</div>
@endsection