<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/primeicons@6.0.1/primeicons.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-300">
    {{-- {{dd(Helpers::getRoutesByPrefix_Suffix('admin.','.index') )}} --}}

    <div id="admin-app">
        <admin-layout>

            <template #nav_bar={mobile_menu_drawer,toggle_mobile_menu_drawer}>
                <x-nav.app-bar>
                    <x-slot name="navigation__bar">
                        <x-nav.toolbar>
                            <x-slot name="menu_icon">
                                <v-btn icon @click="toggle_mobile_menu_drawer">
                                    <v-icon>
                                        <font-awesome-icon :icon="mobile_menu_drawer ? 'fa-solid fa-xmark' : 'fa-solid fa-grip-lines'">
                                        </font-awesome-icon>
                                    </v-icon>
                                </v-btn>
                            </x-slot>
                            <x-slot name="logo">
                                {{-- <v-img  :width="150"src="https://placehold.co/150x50"></v-img> --}}
                                <x-common.application-logo width="50px" height="50px"></x-common.application-logo>
                            </x-slot>
                        </x-nav.toolbar>
                    </x-slot>
                </x-nav.app-bar>

            </template>

            <template #drawer={mobile_menu_drawer,toggle_mobile_menu_drawer}>
                <x-nav.drawer></x-nav.drawer>
            </template>

            <template #content>
                <div class="px-2 py-6">
                    @if (isset($header))
                        <x-common.page-title>
                            {{ $header }}
                        </x-common.page-title>
                    @endif
                    {{ $slot }}
                </div>
            </template>

            <template #footer>
                <x-layout.footer></x-layout.footer>
            </template>

        </admin-layout>
    </div>
</body>

</html>
