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
      <h1 class="text-xl text-slate-700 mb-3">Create Data POST</h1>
      <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
         @csrf
         <div class="flex gap-3" id="inputs">
            
            <div class="my-4 w-1/2">
               <input type="text" class="w-full rounded outline-none border border-slate-400 @error('title') border border-red-500 @enderror" name="title" placeholder="title">
               @error('title')
                  <small class="text-red-500">{{ $message }}</small>
               @enderror
            </div>

            <div class="w-1/2 my-4">
               <select class="block w-full rounded outline-none border border-slate-400 @error('sub_category_id') border border-red-500 @enderror" name="sub_category_id" id="category_id">
                  <option value="">Choose Category :</option>
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
               </select>
               @error('sub_category_id')
                  <small class="text-red-500">{{ $message }}</small>
               @enderror
            </div>

            <div class="my-4 w-1/2">
               <input class="block cursor-pointer w-full px-3 py-1.5 text-gray-700 bg-white bg-clip-padding rounded transition ease-in-out m-0 border border-slate-400
               focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="image" id="formFile">
            </div>

         </div>
         <div> 
            <textarea id="summernote" name="body"></textarea>
         </div>
         <button class="mt-4 mx-auto block py-2 px-4 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow" type="submit" id="create">Create</button>
      </form>
      </div>
   </div>

@endsection

@push('scripts')
   <script src="{{ asset('js/summernote.js') }}"></script>
@endpush
