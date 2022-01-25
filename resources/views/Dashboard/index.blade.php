@extends('layouts.dashboard')

@section('container-dashboard')    
 <div class="container-table">
      <a href="/dashboard/posts/create" class="btn">Create</a>
      <div class="table">
        <table cellspacing="0">
          <tr>
            <th class="no">No</th>
            <th class="title">Title</th>
            <th>Category</th>
            <th>Created_at</th>
            <th class="action">Action</th>
          </tr>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
              <a href="/post/{{ $post->slug }}"><i class="fas fa-eye"></i></a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit"><i class="fas fa-edit"></i></a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @method("DELETE")
                @csrf
                <button type="submit"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="pagination-posts">
        {{ $posts->links() }}
      </div>
    </div>
@endsection

