@extends('layouts.dashboard')

@section('container-dashboard')
<div class="form-create">
  <div class="container-create">
    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
      @csrf
      <input type="text" placeholder="Title" name="title" />
      <select name="category_id" id="category_id">
          <option>Choose Category :</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      <input type="file" name="image" />
      <input type="hidden" id="programming" name="body" />
      <trix-editor input="programming"></trix-editor>
      <button type="submit" class="create">Create</button>
    </form>
  </div>
</div>
@endsection