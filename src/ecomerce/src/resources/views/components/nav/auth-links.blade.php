@if (Route::has('login'))
  <div class="auth__links">
    @auth
      <div class="p-2 text-center">{{ Auth::user()->name }}</div>
      <x-nav.link
        class="w-full"
        :href="route('profile.edit')"
        :active="request()->routeIs('profile.edit')"
      >
        {{ __('My Profile') }}
      </x-nav.link>
      <form
        method="POST"
        action="{{ route('logout') }}"
      >
        @csrf
        <button
          class="w-full mx-auto p-2 font-light text-opacity-75 hover:text-opacity-100 hover:font-bold"
          type="submit"
        >
          {{ __('Log Out') }}
        </button>
      </form>
    @else
      <x-nav.link
        class="w-full"
        :href="route('login')"
        :active="request()->routeIs('login')"
      >
        {{ __('Login') }}
      </x-nav.link>
      @if (Route::has('register'))
        <x-nav.link
          class="w-full"
          :href="route('register')"
          :active="request()->routeIs('register')"
        >
          {{ __('Register') }}
        </x-nav.link>
      @endif
    @endauth
  </div>
@endif
