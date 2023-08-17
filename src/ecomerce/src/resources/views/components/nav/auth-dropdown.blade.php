@if (Route::has('login'))
  <div class="inline-flex items-center justify-center">
    <x-common.primary-button
      class="text-lg w-10 h-10"
      id="profile-dropdown"
      rounded
			on-light-bg
    >
      <font-awesome-icon
        width="18px"
        icon="fa-solid fa-user"
      ></font-awesome-icon>
    </x-common.primary-button>
  </div>
  <v-menu activator="#profile-dropdown">
    <x-nav.auth-links></x-nav.auth-links>
  </v-menu>
@endif
