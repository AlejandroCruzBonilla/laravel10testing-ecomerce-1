<div class="nav__bar nav__bar-sm">
    <div class="nav__bar-wrapper">
        <div class="nav__menu">
            {{$menu_icon}}
        </div>
        <x-navigation.nav-logo>
            {{ $logo }}
        </x-navigation.nav-logo>
    </div>
</div>

{{-- @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
    <x-navigation.responsive-nav-link :href="route('web.contact')" :active="request()->routeIs('web.contact')">
        {{ __(Helpers::cleanRouteName($name)) }}
    </x-navigation.responsive-nav-link>
@endforeach --}}
