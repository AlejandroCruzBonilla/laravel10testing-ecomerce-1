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

<body id="web-app">
    <div class="bg-gray-100">
        <web-app>

            <template v-slot:nav_bar={mobile_menu_drawer,toggle_mobile_menu_drawer}>
                <x-nav.app-bar>
                    <x-slot name="navigation__bar">
                        <x-nav.toolbar>
                            <x-slot name="menu_icon">
                                <v-app-bar-nav-icon class="z-10" @click="toggle_mobile_menu_drawer">
                                </v-app-bar-nav-icon>
                            </x-slot>
                            <x-slot name="logo">
                                {{-- <v-img  :width="150"src="https://placehold.co/150x50"></v-img> --}}
                                <x-application-logo width="50px" height="50px"></x-application-logo>
                            </x-slot>
                        </x-nav.toolbar>
                    </x-slot>
                </x-nav.app-bar>
            </template>

            <template v-slot:content>

                @if (isset($header))
                    <div class="bg-white shadow">
                        <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </div>
                @endif
                <div>
                    {{ $slot }}
                </div>

            </template>
            
            <template v-slot:footer>
                <x-layout.footer.footer></x-layout.footer.footer>
            </template>

        </web-app>
    </div>
</body>

</html>
