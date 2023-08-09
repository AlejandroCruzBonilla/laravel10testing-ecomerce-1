{{-- 
  # * Logo Principal
  # * Links
  # * Social Links
  * Aviso Privacidad
  * Terminos y condiciones
  * Site-map
  # * CopyRigth
  * Direccion, Correo, Telefono
  * Disclaimers
  * Marcas o logos,
--}}

@php
    $copy = '© 2023 Copyright Brand';
    
    $icons = [
        'mdi-facebook' => 'https://facebook.com',
        'mdi-twitter' => 'https://twitter.com',
        'mdi-linkedin' => 'https://linkedin.com',
        'mdi-instagram' => 'https://instagram.com',
    ];
@endphp

<v-footer name="footer_app">

    <div class="mx-auto py-4 px-2">

        <div class="flex justify-center my-2">
            <x-nav.home-link>
                <x-common.application-logo class="fill-slate-200" width="50px" height="50px"></x-common.application-logo>
            </x-nav.home-link>
        </div>

        <div class="flex my-2 justify-center flex-col">
            <div class="flex justify-center py-4 xs:flex-col md:flex-row">
                @foreach (Helpers::getRoutesByPrefix('web') as $name => $route)
                    <x-nav.link class="mx-2 text-gray-200" :href="route($name)" :active="request()->routeIs($name)">
                        {{ __(Helpers::cleanRouteName($name)) }}
                    </x-nav.link>
                @endforeach
            </div>
            <x-layout.social :icons="$icons"></x-layout.social>
        </div>

        <x-layout.copyright :copy="$copy"></x-layout.copyright>
    </div>

</v-footer>
