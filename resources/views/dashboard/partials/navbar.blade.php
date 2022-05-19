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
            <a href="/dashboard/posts/create" class="text-slate-600" id="create-post">Create Post</a>
            {{-- <button id="create-post">create post</button> --}}
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