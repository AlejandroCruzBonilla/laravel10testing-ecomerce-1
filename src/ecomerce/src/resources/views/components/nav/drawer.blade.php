<pv-sidebar
  v-model:visible="mobileMenuDrawer"
  location="left"
  temporary
  @update:visible="onToggleMobileMenuDrawer"
>
  <template #header>
    <div class="flex justify-center items-center">
      {{-- <x-common.application-logo
        height="50px"
        width="50px"
      ></x-common.application-logo> --}}
      {{-- <div class="mx-2">
				{{ __("Alex 139139") }}
			</div> --}}
    </div>
    {{-- @if (Route::has('login'))
      @auth
      @else
        @if (Route::has('register'))
        @endif
      @endauth
    @endif --}}
  </template>
  <x-nav.link-list></x-nav.link-list>
  <hr>
  <x-nav.auth-links></x-nav.auth-links>
</pv-sidebar>
