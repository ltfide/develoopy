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
      {{-- <form class="my-2" wire:submit.prevent="store">
        <div class="">
          <label for="category">
            Select Category : {{ $category }}
            <select class="w-full rounded shadow" name="category" id="category" wire:model="category">
              <option value="">Choose Category</option>
              <option value="Matematika">Math</option>
              <option value="Programming">Programming</option>
              <option value="English">English</option>
            </select>
          </label>
          <label class="font-medium text-slate-700 mt-5 block" for="main-category">
            Main Category
            <input class="rounded shadow w-full" type="text" id="main-category" placeholder="Add Main Category" wire:model="name">
          </label>
          <button class="bg-green-700 py-2 px-4 text-green-100 rounded shadow">Add</button>
        </div>
      </form> --}}

      <form wire:submit.prevent="save">
        <div class="flex gap-3" id="inputs">
           
            <div class="my-4 w-1/3">
              <select wire:model="category" class="block w-full rounded outline-none border border-slate-400 @error('category') border border-red-500 @enderror" name="category" id="category_id">
                <option value="">Choose Category :</option>
                <option value="Matematika">Math</option>
                <option value="Programming">Programming</option>
                <option value="English">English</option>
              </select>
              @error('category')
                <small class="text-red-500">{{ $message }}</small>
              @enderror
            </div>

           <div class="my-4 w-1/2">
              <input wire:model="name" type="text" class="w-full rounded outline-none border border-slate-400 @error('name') border border-red-500 @enderror" placeholder="title">
              @error('name')
                 <small class="text-red-500">{{ $message }}</small>
              @enderror
           </div>

           @error('category_logo') <span class="error">{{ $message }}</span> @enderror

           <div class="my-4">
              <input wire:model="category_logo" class="block cursor-pointer w-full px-3 py-1.5 text-gray-700 bg-white bg-clip-padding rounded transition ease-in-out m-0 border border-slate-400
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" name="category_logo" id="formFile">
           </div>

           <div class="my-4">
             <button class="w-full h-full px-6 bg-green-700 text-green-100 hover:bg-green-800 rounded shadow" type="submit" id="create">Create</button>
           </div>

        </div>
        
     </form>

</div>
