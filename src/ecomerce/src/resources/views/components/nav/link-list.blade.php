<v-list>
  @foreach (RouteHelpers::getRoutesByPrefix('web') as $name => $route)
    <v-list-item>
      <x-nav.link
        class="w-full"
        :href="route($name)"
        :active="request()->routeIs($name)"
      >
        {{ __(RouteHelpers::cleanRouteName($name)) }}
      </x-nav.link>
    </v-list-item>
  @endforeach
</v-list>
