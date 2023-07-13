<div class="nav__bar nav__bar-lg">
    <div class="nav__bar-wrapper">
        <x-navigation.nav-logo>
            {{ $logo }}
        </x-navigation.nav-logo>
        <div class="nav__links">
            @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
                <x-navigation.nav-link :href="route($name)" :active="request()->routeIs($name)">
                    {{ __(Helpers::cleanRouteName($name)) }}
                </x-navigation.nav-link>
            @endforeach
        </div>
    </div>
</div>
