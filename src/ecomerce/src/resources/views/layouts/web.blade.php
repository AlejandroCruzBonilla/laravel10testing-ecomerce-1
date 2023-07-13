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

    <style>
        body {
            padding-bottom: 150vh;
        }
    </style>
</head>

<body>
    <div class="bg-gray-100">
        {{-- <x-navigation.nav-bar></x-navigation.nav-bar> --}}
        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}
        <!-- Page Content -->
        <main id="web-app">
            <web-app>
                <template v-slot:navigation_desktop>
                    <x-navigation.nav-bar-links-lg>
                        <x-slot name="logo">
                            <v-img src="https://placehold.co/150x50"></v-img>
                        </x-slot>
                    </x-navigation.nav-bar-links-lg>
                </template>
                <template v-slot:content>
                    <div>
                        {{ $slot }}
                    </div>
                </template>
                <template v-slot:footer>
                    Footer
                </template>
            </web-app>
        </main>
    </div>
</body>

</html>
