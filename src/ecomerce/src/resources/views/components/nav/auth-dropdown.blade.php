@php
  $menuItems = [];
  if (Auth::user()) {
      $menuItems[] = [
          'label' => __('My Profile'),
          'url' => route('profile.edit'),
          'icon' => 'fa-solid fa-user',
          'active' => request()->routeIs('profile.edit'),
      ];
  } else {
      if (Route::has('login')) {
          $menuItems[] = [
              'label' => __('Login'),
              'url' => route('login'),
              'icon' => 'fa-solid fa-arrow-right-from-bracket',
              'active' => request()->routeIs('login'),
          ];
      }
      if (Route::has('register')) {
          $menuItems[] = [
              'label' => __('Register'),
              'url' => route('register'),
              'icon' => 'fa-solid fa-user',
              'active' => request()->routeIs('register'),
          ];
      }
  }
@endphp


<button-menu
  menu-id="auth-menu"
  :items="{{ json_encode($menuItems) }}"
>
  <template #button={onClick}>
    <div class="h-full inline-flex items-center justify-center">
      <x-common.primary-button
        class="text-lg w-10 h-10"
        id="profile-dropdown"
        rounded
        on-light-bg
        @click="onClick"
      >
        <font-awesome-icon
          width="18px"
          icon="fa-solid fa-user"
        ></font-awesome-icon>
      </x-common.primary-button>
    </div>
  </template>
  <template #start>
    @auth
      <div class="p-2 text-center">
        <font-awesome-icon
          {{-- width="18px" --}}
          icon="fa-solid fa-circle-user"
        ></font-awesome-icon>
        {{ Auth::user()->name }}
      </div>
    @endauth
  </template>
  <template #end>
    @auth
      <div class="p-2 hover--background--tertiary">
        <form
          method="POST"
          action="{{ route('logout') }}"
        >
          @csrf
          <button
            class="w-full hover:font-bold text-center"
            type="submit"
          >
            <font-awesome-icon
              class="-scale-100"
              icon="fa-solid fa-arrow-right-from-bracket"
            >
            </font-awesome-icon>
            {{ __('Log Out') }}
          </button>
        </form>
      </div>
    @endauth
  </template>
</button-menu>
