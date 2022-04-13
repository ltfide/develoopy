<div>
    @if (session()->has('success'))
        @if ($show) 
          <div class="bg-green-200 border mb-3 border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block text-sm sm:inline font-medium">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg  wire:click="closeBtn" class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>
        @endif
      @endif
      <form wire:submit.prevent="store">
          <div>
            <label class="font-medium text-slate-700" for="reference">Category Reference</label>
            <select class="rounded" id="reference" wire:model="category_id">
              <option hidden>Select Category</option>
              @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
            @error('category_id')
              <p class="text-red-700 test-sm font-medium italic">{{ $message }}</p>
            @enderror
          </div>
          <div class="my-5">
            <label class="text font-medium text-slate-700" for="category-name">Category Name</label>
            <input class="block w-full rounded shadow" type="text" id="category-name" wire:model="name">
            @error('name')
              <p class="text-red-700 test-sm font-medium italic">{{ $message }}</p>
            @enderror
          </div>
            <button class="py-2 px-5 bg-green-700 text-green-100 rounded shadow hover:bg-green-900" type="submit">Add Category</button>
      </form>
</div>
