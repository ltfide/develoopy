<div>
    @if (session()->has('success'))
        @if ($show) 
          <div class="bg-green-200 border mb-3 border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline font-medium">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg  wire:click="closeBtn" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
        @endif
      @endif
    <table class="border-collapse border border-slate-400 w-full">
        <thead>
          <tr>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">No</th>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Category Name</th>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)
                <tr>
                    <td class="border border-slate-300 p-1 ">{{ $categories->firstItem() + $index }} </td>
                    <td class="border border-slate-300 p-1 ">{{ $category->name }}</td>
                    <td class="border border-slate-300 p-1 box-content ">
                        <button class="px-2 bg-green-600 text-green-100 rounded shadow" wire:click="edit">Edit</button>
                        <button onclick="return confirm('Are You Sure?')" class="px-2 bg-red-600 text-green-100 rounded shadow" wire:click="delete({{ $category->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mt-3">
          {{ $categories->links() }}
      </div>
</div>
