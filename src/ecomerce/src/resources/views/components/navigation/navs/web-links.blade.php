<x-navigation.nav-link :href="route('web.home')" :active="request()->routeIs('web.home')">
    {{ __('Home') }}
</x-navigation.nav-link>
<x-navigation.nav-link :href="route('web.products')" :active="request()->routeIs('web.products')">
    {{ __('Products') }}
</x-navigation.nav-link>
<x-navigation.nav-link :href="route('web.about')" :active="request()->routeIs('web.about')">
    {{ __('About') }}
</x-navigation.nav-link>
<x-navigation.nav-link :href="route('web.contact')" :active="request()->routeIs('web.contact')">
    {{ __('Contact') }}
</x-navigation.nav-link>
