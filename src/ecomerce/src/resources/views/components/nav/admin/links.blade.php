{{-- @if (Auth::user() && Auth::user()->role->name === 'admin')
    <x-navigation.nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
        {{ __('Dashboard') }}
    </x-navigation.nav-link>
@endif --}}
