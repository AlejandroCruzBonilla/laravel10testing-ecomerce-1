@if (Route::has('login'))
    {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div> --}}
    <div>
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block w-4/5 mx-auto p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-300 hover:rounded-md">
                    {{ __('Log Out') }}
                </button>
            </form>
        @else
            <x-navigation.nav-link class="w-full" :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-navigation.nav-link>

            @if (Route::has('register'))
                <x-navigation.nav-link class="w-full" :href="route('register')" :active="request()->routeIs('register')">
                    {{ __('Register') }}
                </x-navigation.nav-link>
            @endif
        @endauth
    </div>
@endif
