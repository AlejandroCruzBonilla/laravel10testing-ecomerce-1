@foreach (
    RouteHelpers::getRoutesByPrefix_Suffix('admin.', '.index') as $name => $route
)
    <x-nav.link class="mx-2" :href="route($name)" :active="request()->routeIs($name)">
        {{ __(RouteHelpers::cleanRouteName($name)) }}
    </x-nav.link>
@endforeach
