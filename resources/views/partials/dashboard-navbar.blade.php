    <header>
      <div class="container">
        <div class="flex items-center justify-center">
          <a href="/user/profile">{{ Auth::user()->name }}</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-jet-dropdown-link>
        </form>
        </div>
      </div>
    </header>
    <section>
      <a href="/dashboard/posts"><h2 class="logo">Deve<span>loopy</span></h2></a>
      <div class="navbar">
        <a href="/dashboard/posts">All Post</a>
        <a href="/dashboard/categories">Create Categories</a>
      </div>
    </section>