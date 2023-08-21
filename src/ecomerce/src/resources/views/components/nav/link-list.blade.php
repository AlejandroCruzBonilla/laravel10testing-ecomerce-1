@foreach (RouteHelpers::getRoutesByPrefix('web') as $name => $route)
  <x-nav.link
    class="w-full my-2 py-2 text-center hover--background--tertiary hover:font-bold"
    :href="route($name)"
    :active="request()->routeIs($name)"
  >
    {{ __(RouteHelpers::cleanRouteName($name)) }}
  </x-nav.link>
@endforeach
