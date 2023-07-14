<x-nav.link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
    {{ __('Dashboard') }}
</x-nav.link>
