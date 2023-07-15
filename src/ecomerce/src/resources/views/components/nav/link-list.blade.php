<v-list>
  @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
      <v-list-item>
          <x-nav.link class="w-full" :href="route($name)" :active="request()->routeIs($name)">
              {{ __(Helpers::cleanRouteName($name)) }}
          </x-nav.link>
      </v-list-item>
  @endforeach
</v-list>