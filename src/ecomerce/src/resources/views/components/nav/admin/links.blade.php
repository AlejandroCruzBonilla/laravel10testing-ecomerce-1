<x-nav.link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
    {{ __('Dashboard') }}
</x-nav.link>


@foreach (
    Helpers::getRoutesByPrefix_Suffix('admin.', '.index') as $name => $route
)
    <x-nav.link class="mx-2" :href="route($name)" :active="request()->routeIs($name)">
        {{ __(Helpers::cleanRouteName($name)) }}
    </x-nav.link>
@endforeach
