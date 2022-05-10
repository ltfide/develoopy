<header class="bg-white">
   <div class="container mx-auto">
      <nav class="bg-white py-4 fixed top-0 z-[2] left-0 right-0 px-6 shadow flex items-center gap-3 justify-between">
         <h1 class="z-10">Developpy</h1>
         <div class="auth-icon flex gap-3 items-center">
            <a class="capitalize" href="/user/profile">{{ Auth::user()->name }}</a>
            <form class="border-none block" method="POST" action="{{ route('logout') }}">
               @csrf

               <x-jet-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              this.closest('form').submit();">
                  {{ __('Log Out') }}
               </x-jet-dropdown-link>
            </form>    
         </div>
      </nav>
      <div class="hidden fixed lg:block shadow bg-white w-56 -mt-7 px-6 text-slate-500 z-[3]">
         <div class="h-screen">

            <div class="flex gap-2 pt-3">
               <img class="w-6" src="{{ asset('img/icons/post.svg') }}" alt="">
               <a class="font-normal  {{ Request::is("dashboard/posts") ? "text-green-600" : "" }}" href="/dashboard/posts">Articles</a>
            </div>

            <div class="flex gap-2 pt-3">
               <img class="w-6" src="{{ asset('img/icons/write.svg') }}" alt="">
               <a class="font-normal  {{ Request::is("dashboard/posts/create") ? "text-green-600" : "" }}"" href="/dashboard/posts/create">Write</a>
            </div>

            <div class="flex gap-2 pt-3">
               <img class="w-6" src="{{ asset('img/icons/category.svg') }}" alt="">
               <a class="font-normal  {{ Request::is("dashboard/categories") ? "text-green-600" : "" }}"" href="/dashboard/categories">Categories</a>
            </div>

         </div>
      </div>
   </div>
</header>