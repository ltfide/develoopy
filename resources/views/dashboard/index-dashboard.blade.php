@extends('dashboard.layouts.dashboard')

@push('styles')
   <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
@endpush

@section('content-dashboard')
   <div class="container">
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

         <div class="bg-white p-6 shadow-lg rounded flex gap-5 items-center">
            <img class="w-14" src="{{ asset('img/icons/post.svg') }}" alt="">
            <div>
               <h3 class="text-slate-600">{{ count($allPost) }}</h3>
               <p class="lg:block text-slate-600">All Post</p>
            </div>
         </div>

         <div class="bg-white p-6 shadow-lg rounded flex gap-5 items-center">
            <img class="w-14" src="{{ asset('img/icons/math.svg') }}" alt="">
            <div>
               <h3 class="text-slate-600">{{ $math }}</h3>
               <p class="text-slate-600">Matematika</p>
            </div>
         </div>

         <div class="bg-white p-6 shadow-lg rounded flex gap-5 items-center">
            <img class="w-14" src="{{ asset('img/icons/programming.svg') }}" alt="">
            <div>
               <h3 class="text-slate-600">{{ $programming }}</h3>
               <p class="text-slate-600">Programming</p>
            </div>
         </div>

         <div class="bg-white p-6 shadow-lg rounded flex gap-5 items-center">
            <img class="w-14" src="{{ asset('img/icons/english.svg') }}" alt="">
            <div>
               <h3 class="text-slate-600">{{ $english }}</h3>
               <p class="text-slate-600">English</p>
            </div>
         </div>

      </div>

      <div class="mt-8">
         <table class="border-collapse border border-slate-400 w-[700px] lg:w-full">
           <thead>
             <tr>
               <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">No</th>
               <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Title</th>
               <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Category</th>
               <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Create</th>
               <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Action</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($posts as $index => $post)
                   <tr>
                       <td class="border border-slate-300 p-1 ">{{ $posts->firstItem() + $index }} </td>
                       <td class="border border-slate-300 p-1 ">{{ $post->title }}</td>
                       <td class="border border-slate-300 p-1 ">{{ $post->category->name ?? "" }}</td>
                       <td class="border border-slate-300 p-1 ">{{ $post->created_at->format("d M y H:i") }}</td>
                       <td class="border border-slate-300 p-1 box-content text-center">
                           <a href="/post/{{ $post->slug }}" class="py-1 px-2 bg-sky-400 text-green-100 rounded shadow" wire:click="edit"><img class="w-4 inline-block" src="{{ asset('img/icons/show2.svg') }}" alt=""></a>
                           <a href="/dashboard/posts/{{ $post->slug }}/edit" class="py-1 px-2 bg-green-600 text-green-100 rounded shadow" wire:click="edit"><img class="w-4 inline-block" src="{{ asset('img/icons/update.svg') }}" alt=""></a>
                           <form class="inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                             @method("DELETE")
                             @csrf
                             <button onclick="return confirm('Are you sure?')" class="px-2 bg-red-600 text-green-100 rounded shadow" style="padding-top: 2px; padding-bottom: 2px;" type="submit">&times;</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
           </tbody>
         </table>
         <div class="mt-3">
             {{ $posts->links() }}
         </div>
       </div>

   </div>
@endsection

@push('scripts')
   <script src="{{ asset('js/toastr.min.js') }}"></script>
   <script>
      @if(Session::has('success'))
         toastr.success("{{ SESSION::get('success') }}")
      @endif
   </script>
@endpush