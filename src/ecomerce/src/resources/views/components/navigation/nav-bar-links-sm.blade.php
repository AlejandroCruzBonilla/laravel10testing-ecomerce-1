<div class="nav__bar nav__bar-sm">
    <div class="nav__bar-wrapper">
        <div class="nav__menu">
            <v-app-bar-nav-icon class="z-10"></v-app-bar-nav-icon>
        </div>
        <div class="nav__logo">
            <a href="/">
                <v-img src="https://placehold.co/150x50"></v-img>
            </a>
        </div>
    </div>
</div>

{{-- @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
    <x-navigation.responsive-nav-link :href="route('web.contact')" :active="request()->routeIs('web.contact')">
        {{ __(Helpers::cleanRouteName($name)) }}
    </x-navigation.responsive-nav-link>
@endforeach --}}
