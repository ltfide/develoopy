@extends('dashboard.layouts.dashboard')

@push('styles')
  @livewireStyles    
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content-dashboard')
 <div class="container mx-auto">
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
    </div>
@endsection

