@if (Route::has('login'))
  <auth-drop-down>
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
    <template #menu-items>
      <x-nav.auth-links></x-nav.auth-links>
    </template>
  </auth-drop-down>
@endif
