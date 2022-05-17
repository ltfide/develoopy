{{-- <header class="bg-white">
   <div class="container mx-auto">
      <nav class="bg-white py-2 fixed top-0 z-[2] left-0 right-0 px-6 shadow flex items-center gap-3 justify-between">
         <h1 class="z-10 text-lg text-green-600">l o o <span class="text-lg text-slate-600">p y</span></h1>
         <div class="auth-icon flex gap-3 items-center">
            <a class="capitalize text-sm text-slate-600" href="/user/profile">{{ Auth::user()->name }}</a>
            <form class="border-none block" method="POST" action="{{ route('logout') }}">
               @csrf

               <x-jet-dropdown-link class="text-sm text-slate-600" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              this.closest('form').submit();">
                  {{ __('Log Out') }}
               </x-jet-dropdown-link>
            </form>    
         </div>
      </nav>
      <div class="hidden fixed lg:block shadow bg-white w-56 -mt-11 px-6 text-slate-500 z-[3]">
         <div class="h-screen">

            <div class="flex gap-4 pt-3 items-center">
               <img class="w-6" src="{{ asset('img/icons/post.svg') }}" alt="">
               <a class="text-sm font-semibold - {{ Request::is("dashboard/posts") ? "text-green-600" : "" }}" href="/dashboard/posts">Articles</a>
            </div>

            <div class="flex gap-4 pt-3 items-center">
               <img class="w-6" src="{{ asset('img/icons/write.svg') }}" alt="">
               <a class="text-sm font-semibold   {{ Request::is("dashboard/posts/create") ? "text-green-600" : "" }}"" href="/dashboard/posts/create">Write</a>
            </div>

            <div class="flex gap-4 pt-3 items-center">
               <img class="w-6" src="{{ asset('img/icons/category.svg') }}" alt="">
               <a class="text-sm font-semibold   {{ Request::is("dashboard/categories") ? "text-green-600" : "" }}"" href="/dashboard/categories">Categories</a>
            </div>

         </div>
      </div>
   </div>
</header> --}}

{{-- bg-gradient-to-b from-[#F5F7FB] via-[#F5F7FB] to-white --}}

<header>
   <nav class="hidden lg:block absolute top-0 bottom-0 left-0 w-56 py-6 px-6 bg-gradient-to-b from-white to-[#F5F7FB]">
      <div class="logo mb-7 -ml-4 w-36">
         <img class="w-full" src="{{ asset('img/loopy-logo.png') }}" alt="">
      </div>
      <div class="flex flex-col gap-2">
         <div>
            <a href="/dashboard/posts" class="text-slate-600">Home</a>
         </div>
         <div>
            <a href="/dashboard/posts/create" class="text-slate-600">Create Post</a>
         </div>
         <div>
            <a href="/dashboard/categories" class="text-slate-600">Category</a>
         </div>
      </div>
   </nav>
</header>

<div class="ml-0 px-5 md:ml-56 py-6 md:px-10">
   <div class="container">
      <div class="auth-icon flex gap-3 items-center justify-end">
         <a class="capitalize text-sm text-slate-600" href="/user/profile">{{ Auth::user()->name }}</a>
         <form class="border-none block" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link class="text-sm text-slate-600" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                           this.closest('form').submit();">
               {{ __('Log Out') }}
            </x-jet-dropdown-link>
         </form>    
      </div> 
   </div>
</div>