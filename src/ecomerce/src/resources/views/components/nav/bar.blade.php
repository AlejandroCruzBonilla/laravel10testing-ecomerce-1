<nav-bar
  class="header"
  :admin-bar-height="adminBarHeight"
  @nav-bar-height="onNavBarHeight"
>
  <x-nav.toolbar>
    <x-slot name="prepend">
      <div class="lg:hidden inline-flex items-center justify-center">
        <x-common.primary-button
          class="text-lg w-10 h-10"
          rounded
          on-light-bg
          @click="onToggleMobileMenuDrawer"
        >
          <font-awesome-icon
            width="16px"
            :icon="mobileMenuDrawer ? 'fa-solid fa-xmark' : 'fa-solid fa-grip-lines'"
          ></font-awesome-icon>
        </x-common.primary-button>
      </div>
    </x-slot>
    <x-slot name="logo">
      <x-common.application-logo
        height="50px"
        width="50px"
      ></x-common.application-logo>
    </x-slot>
    <x-slot name="links">
      @foreach (RouteHelpers::getRoutesByPrefix('web') as $name => $route)
        <x-nav.link
          class="mx-2"
          :href="route($name)"
          :active="request()->routeIs($name)"
        >
          {{ __(RouteHelpers::cleanRouteName($name)) }}
        </x-nav.link>
      @endforeach
    </x-slot>
    <x-slot name="append">
      <x-nav.auth-dropdown></x-nav.auth-dropdown>
    </x-slot>
  </x-nav.toolbar>
</nav-bar>
