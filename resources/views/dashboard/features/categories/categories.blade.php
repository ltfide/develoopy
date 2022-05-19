@extends('dashboard.layouts.dashboard')

@push('styles')
  @livewireStyles    
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content-dashboard')
 {{-- <div class="container mx-auto">
      <h1 class="text-slate-800 font-medium text-2xl">Create Category</h1>
      <div class="grid grid-cols-3 gap-3 my-5">
        <div class="p-6 shadow rounded-lg bg-white">
          @livewire('categories-create')
        </div>
        <div class="p-10 shadow rounded-lg col-span-2 bg-white">
          @livewire('categories-table')
        </div>
      </div>
      <div class="grid grid-cols-3 gap-3 my-5">
        <div class="p-6 shadow rounded-lg bg-white">
          @livewire('main-categories')
        </div>
        <div class="p-10 shadow rounded-lg col-span-2 bg-white">
          @livewire('main-categories-table')
        </div>
      </div>
    </div> --}}

    <div class="container">
      <div class="rounded mx-auto p-3 pt-0">
        <h1 class="text-xl text-slate-700 mb-3">Create Category</h1>
        
        <div class="main-categories">
          @livewire('main-categories')
          @livewire('main-categories-table')
        </div>

        <div class="sub-categories">
          @livewire('categories-create')
          @livewire('categories-table')
        </div>
      </div>
   </div>
@endsection

@push('scripts')
  {{-- <script>
    const category = document.getElementById('category_id');

    // category.addEventListener('onchange', function () {
    //     showData();
    // });

    category.onchange = () => {
      showData()
    }

    function showData() {
      console.log(category.value)
    }
  </script> --}}
@endpush

