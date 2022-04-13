@extends('layouts.dashboard')

@section('container-dashboard')
<div class="container">
  <div class="bg-white rounded shadow p-3 w-3/4">
    <h1 class="text-2xl font-medium text-slate-700">Create Data POST</h1>
    <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
      @csrf
      <input class="w-full my-4" type="text" placeholder="Title" name="title" />
      <select class="block" name="sub_category_id" id="category_id">
          <option hidden>Choose Category :</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      <input class="my-4" type="file" name="image" />
      <textarea id="summernote" name="body"></textarea>
      <button class="mt-4 py-2 px-4 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow" type="submit">Create</button>
    </form>
  </div>
</div>


@endsection