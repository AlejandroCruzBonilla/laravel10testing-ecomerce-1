@if (Route::has('login'))
    <div class="auth__links">
        @auth
            <v-list>
                <v-list-item>
                    <x-navigation.nav-link class="w-full" :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        {{ __('My Profile') }}
                    </x-navigation.nav-link>
                </v-list-item>
                <v-list-item>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full mx-auto p-2 hover:bg-gray-200 hover:rounded-md">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </v-list-item>
            </v-list>
        @else
            <v-list>
                <v-list-item>
                    <x-navigation.nav-link class="w-full" :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-navigation.nav-link>
                </v-list-item>
                @if (Route::has('register'))
                    <v-list-item>
                        <x-navigation.nav-link class="w-full" :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-navigation.nav-link>
                    </v-list-item>
                @endif
            </v-list>
        @endauth
    </div>
@endif
