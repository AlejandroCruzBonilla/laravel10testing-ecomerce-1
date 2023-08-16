@foreach (RouteHelpers::getRoutesByPrefix('web') as $name => $route)
  <x-nav.link
    class="w-full"
    :href="route($name)"
    :active="request()->routeIs($name)"
  >
    {{ __(RouteHelpers::cleanRouteName($name)) }}
  </x-nav.link>
@endforeach
