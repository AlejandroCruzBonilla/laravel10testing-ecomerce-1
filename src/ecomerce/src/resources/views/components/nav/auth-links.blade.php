@if (Route::has('login'))
  <div class="auth__links">
    @auth
      <div class="p-2 text-center">{{ Auth::user()->name }}</div>
      {{-- <div class="p-2 text-center">{{ Auth::user()->roles->first()->name }}</div> --}}
      <x-nav.link
        class="w-full my-2 p-2 text-center hover--background--tertiary hover:font-bold"
        :href="route('profile.edit')"
        :active="request()->routeIs('profile.edit')"
      >
        {{-- <font-awesome-icon icon="fa-solid fa-user"></font-awesome-icon> --}}
        {{ __('My Profile') }}
      </x-nav.link>
      <form
        method="POST"
        action="{{ route('logout') }}"
      >
        @csrf
        <button
          class="w-full my-2 p-2 text-center hover--background--tertiary hover:font-bold"
          type="submit"
        >
          {{-- <font-awesome-icon
            class="-scale-100"
            icon="fa-solid fa-arrow-right-from-bracket"
          >
          </font-awesome-icon> --}}
          {{ __('Log Out') }}
        </button>
      </form>
    @else
      <x-nav.link
        class="w-full my-2 p-2 text-center hover--background--tertiary hover:font-bold"
        :href="route('login')"
        :active="request()->routeIs('login')"
      >
        {{-- <font-awesome-icon icon="fa-solid fa-arrow-right-from-bracket"></font-awesome-icon> --}}
        {{ __('Login') }}
      </x-nav.link>
      @if (Route::has('register'))
        <x-nav.link
          class="w-full my-2 p-2 text-center hover--background--tertiary hover:font-bold"
          :href="route('register')"
          :active="request()->routeIs('register')"
        >
          {{-- <font-awesome-icon icon="fa-solid fa-user"></font-awesome-icon> --}}
          {{ __('Register') }}
        </x-nav.link>
      @endif
    @endauth
  </div>
@endif
