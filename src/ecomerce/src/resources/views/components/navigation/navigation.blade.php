<v-app-bar scroll-behavior="hide" class="navigation__bar">
    {{ $navigation__bar }}
</v-app-bar>

<div class="nav-drawer lg:hidden">
    <v-navigation-drawer v-model="mobile_menu_drawer" location="left" temporary
        @update:model-value="toggle_mobile_menu_drawer">
        <v-list>
            @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
                <v-list-item>
                    <x-navigation.nav-link class="w-full" :href="route($name)" :active="request()->routeIs($name)">
                        {{ __(Helpers::cleanRouteName($name)) }}
                    </x-navigation.nav-link>
                </v-list-item>
            @endforeach
        </v-list>
        <v-divider :thickness="3" class="border-opacity-100 w-4/5 mx-auto"></v-divider>
        <x-navigation.auth-links></x-navigation.auth-links>
    </v-navigation-drawer>
</div>
