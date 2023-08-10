<template v-slot:prepend>
    @if ($menu_icon)
        <div class="nav__menu lg:hidden">
            {{ $menu_icon }}
        </div>
    @endif
</template>
<div class="toolbar">
    <div class="toolbar-wrapper">
        <x-nav.home-link>
            {{ $logo }}
        </x-nav.home-link>
        <div class="toolbar-links hidden lg:block">
            @foreach (Helpers::getRoutesByPrefix('web') as $name => $route)
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
