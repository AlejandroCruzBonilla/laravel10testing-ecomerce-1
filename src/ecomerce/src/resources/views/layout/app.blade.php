<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >

  <title>@yield('title')</title>
  <meta
    name="description"
    content="@yield('description')"
  >

  <!-- Fonts -->
  <link
    href="https://fonts.bunny.net"
    rel="preconnect"
  >
  <link
    href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://unpkg.com/primeicons@6.0.1/primeicons.css"
    rel="stylesheet"
  >

  <!-- Scripts -->
  @vite(['resources/css/index.css', 'resources/js/index.js'])
</head>

<body>
  {{-- {{dd(RouteHelpers::getRoutesByPrefix_Suffix('admin.','.index') )}} --}}
  <div id="app">
    <app-layout
      :has-admin-role={{ Auth::user() && Auth::user()->hasAnyRole(['admin', 'webmaster']) ? 'true' : 'false' }}
    >

      <template #admin-bar>
        <x-nav.admin.bar></x-nav.admin.bar>
      </template>

      <template #nav={mobile_menu_drawer,toggle_mobile_menu_drawer}>
        <x-nav.bar></x-nav.bar>
      </template>

      <template #drawer={mobile_menu_drawer,toggle_mobile_menu_drawer}>
        <x-nav.drawer></x-nav.drawer>
      </template>

      <template #content>
        @if (isset($title))
          <x-common.page-title>
            {{ $title }}
          </x-common.page-title>
        @endif
        {{ $slot }}
      </template>

      <template #footer>
        <x-layout.footer></x-layout.footer>
      </template>

    </app-layout>
  </div>
</body>

</html>
