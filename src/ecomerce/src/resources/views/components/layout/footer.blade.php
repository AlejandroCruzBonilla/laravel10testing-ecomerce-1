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

<v-footer class="w-full mx-auto">
    <div class="w-full h-full bg-slate-900">
        <div class="w-full h-full max-w-screen-2xl mx-auto py-4 px-2">

            <div class="flex justify-center my-2">
                <x-nav.logo>
                    <x-application-logo class="fill-slate-200" width="50px" height="50px"></x-application-logo>
                </x-nav.logo>
            </div>

            <div class="flex my-2 justify-center flex-col">
                <div class="flex justify-center py-4">
                    @foreach (Helpers::getRoutesByStarting('web') as $name => $route)
                        <x-nav.link class="mx-2 text-gray-200" :href="route($name)" :active="request()->routeIs($name)">
                            {{ __(Helpers::cleanRouteName($name)) }}
                        </x-nav.link>
                    @endforeach
                </div>
                <x-layout.social :icons="$icons"></x-layout.social>
            </div>

            <x-layout.copyright :copy="$copy"></x-layout.copyright>
        </div>
    </div>
</v-footer>
