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
      <form class="my-2" wire:submit.prevent="store">
        <div class="">
          <label class="font-medium text-slate-700" for="main-category">Main Category</label>
          <input class="rounded shadow my-3" type="text" id="main-category" size="16" placeholder="Add Main Category" wire:model="name">
          <button class="bg-green-700 py-2 px-4 text-green-100 rounded shadow">Add</button>
        </div>
      </form>
</div>
