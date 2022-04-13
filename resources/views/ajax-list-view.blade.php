<div class="grid grid-cols-1 gap-8 lg:gap-4 my-7 md:grid-cols-2 lg:grid-cols-4">
  @foreach ($data as $row)            
    <div class="border h-96 min-h-full rounded shadow-lg relative">
      <a href="/post/{{ $row->slug }}"><img class="my-4 px-0 w-full h-60 lg:h-52 bg-cover bg-center object-cover" src="{{ asset("storage/" . $row->image) }}" alt=""></a>
      <a class="block text-left px-6 text-xl text-slate-600 font-semibold hover:underline" href="/post/{{ $row->slug }}">{{ $row->title }}</a>
      @if (isset($row->category->name))
        <a class="inline-block px-6 py-1 bg-green-600 rounded text-white absolute bottom-4 left-0 border shadow hover:bg-green-700" id="btn" href="/category/{{ $row->category->slug ?? ""}}">{{ $row->category->name ?? "" }}</a>
      @endif
      <span class="text-lg absolute bottom-4 right-0 border shadow">{{ $row->created_at->format("d/m/y") }}</span>
    </div>
  @endforeach
</div>
<section class="text-center mt-16">
  {!! $data->links() !!}
</section>
