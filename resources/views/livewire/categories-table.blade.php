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
    <table class="border-collapse border border-slate-400 w-full">
        <thead>
          <tr>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">No</th>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Category Name</th>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Reference</th>
            <th class="border border-slate-300 bg-green-700 text-green-100 text-left p-1">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)
                <tr>
                    <td class="border border-slate-300 p-1 ">{{ $categories->firstItem() + $index }} </td>
                    <td class="border border-slate-300 p-1 ">{{ $category->name }}</td>
                    <td class="border border-slate-300 p-1 ">{{ $category->category->name ?? "" }}</td>
                    <td class="border border-slate-300 p-1 box-content ">
                        <button class="px-2 bg-green-600 text-green-100 rounded shadow" wire:click="showCategory({{ $category->id }})">Edit</button>
                        <button class="px-2 bg-red-600 text-green-100 rounded shadow" onclick="return confirm('Are You Sure?')" wire:click="delete({{ $category->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mt-3">
          {{ $categories->links() }}
      </div>

      {{-- <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button> --}}
  
    <!--Modal-->
    <div  class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
        
        <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Edit Category</p>
            <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
            </div>
            </div>

            <!--Body-->
            <form>
                <div>
                <label class="font-medium text-slate-700" for="reference">Category Reference</label>
                <select class="block w-full rounded" id="reference" wire:model="category_id">
                    @foreach ($categories as $category)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
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

                <!--Footer-->
                <div class="flex justify-end pt-2">
                <button class="px-4 bg-transparent p-3 rounded-lg text-green-700 hover:bg-gray-100 hover:text-green-900 mr-2" wire:click="updateCategory">Edit</button>
                <div class="modal-close  bg-green-700 px-4 rounded-lg text-white hover:bg-green-900">Close</div>
                </div>
                
            </form>

            
        </div>
        </div>
    </div>
</div>
