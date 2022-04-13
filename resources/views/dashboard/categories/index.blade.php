@extends('layouts.dashboard')

@push('styles')
  @livewireStyles    
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('container-dashboard')
 <div class="container">
      <h1 class="text-slate-800 font-medium text-2xl">Create Category</h1>
      <div class="grid grid-cols-3 gap-3 my-5">
        <div class="p-6 shadow rounded-2xl bg-white">
          @livewire('categories-create')
        </div>
        <div class="p-10 shadow rounded-2xl col-span-2 bg-white">
          @livewire('categories-table')
        </div>
      </div>
      <div class="grid grid-cols-3 gap-3 my-5">
        <div class="p-6 shadow rounded-2xl bg-white">
          @livewire('main-categories')
        </div>
        <div class="p-10 shadow rounded-2xl col-span-2 bg-white">
          @livewire('main-categories-table')
        </div>
      </div>
    </div>
@endsection

