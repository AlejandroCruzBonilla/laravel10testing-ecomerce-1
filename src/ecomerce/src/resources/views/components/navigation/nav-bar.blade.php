<div class="nav__bar">
    <div class="nav__bar-wrapper">
        @if ($menu_icon)
            <div class="nav__menu lg:hidden">
                {{ $menu_icon }}
            </div>
        @endif
        <x-navigation.nav-logo>
            {{ $logo }}
        </x-navigation.nav-logo>
        <div class="nav__links hidden lg:block">
            @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
                <x-navigation.nav-link class="mx-2" :href="route($name)" :active="request()->routeIs($name)">
                    {{ __(Helpers::cleanRouteName($name)) }}
                </x-navigation.nav-link>
            @endforeach
        </div>
    </div>
</div>
