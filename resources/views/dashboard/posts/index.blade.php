@extends('layouts.dashboard')

@section('container-dashboard')    
 <div class="container">
      <a href="/dashboard/posts/create" class="py-2 px-4 bg-green-700 text-green-100 rounded shadow ">Create</a>
      <div class="my-3">
        <table class="border-collapse border border-slate-400 w-full">
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
                      <td class="border border-slate-300 p-1 ">{{ $post->created_at }}</td>
                      <td class="border border-slate-300 p-1 box-content ">
                          <a href="/post/{{ $post->slug }}" class="py-1 px-2 bg-sky-700 text-green-100 rounded shadow" wire:click="edit"><i class="fas fa-eye"></i></a>
                          <a href="/dashboard/posts/{{ $post->slug }}/edit" class="py-1 px-2 bg-green-600 text-green-100 rounded shadow" wire:click="edit"><i class="fas fa-edit"></i></a>
                          <form class="inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="px-2 bg-red-600 text-green-100 rounded shadow" style="padding-top: 2px; padding-bottom: 2px;" type="submit"><i class="fas fa-trash"></i></button>
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

