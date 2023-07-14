<template v-slot:prepend>
    @if ($menu_icon)
        <div class="nav__menu lg:hidden">
            {{ $menu_icon }}
        </div>
    @endif
</template>
<div class="nav__bar">
    <div class="nav__bar-wrapper">
        <x-nav.logo>
            {{ $logo }}
        </x-nav.logo>
        <div class="nav__links hidden lg:block">
            @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
                <x-nav.link class="mx-2" :href="route($name)" :active="request()->routeIs($name)">
                    {{ __(Helpers::cleanRouteName($name)) }}
                </x-nav.link>
            @endforeach
        </div>
    </div>
</div>
<template v-slot:append>
    <x-nav.auth-dropdown></x-nav.auth-dropdown>
</template>
