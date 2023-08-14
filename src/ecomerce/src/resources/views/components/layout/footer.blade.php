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
  
  $socialLinks = [
      'Facebook' => [
          'href' => 'https://facebook.com',
          'icon' => 'fa-brands fa-facebook-f',
      ],
      'Instagram' => [
          'href' => 'https://instagram.com',
          'icon' => 'fa-brands fa-instagram',
      ],
      'Twitter' => [
          'href' => 'https://twitter.com',
          'icon' => 'fa-brands fa-twitter',
      ],
      'Linkedin' => [
          'href' => 'https://linkedin.com',
          'icon' => 'fa-brands fa-linkedin',
      ],
  ];
@endphp

<v-footer name="footer">

  <div class="footer-wrapper mx-auto">

    <div class="flex justify-center my-2">
      <x-nav.home-link>
        <x-common.application-logo
          class="fill-slate-200"
          width="50px"
          height="50px"
        ></x-common.application-logo>
      </x-nav.home-link>
    </div>

    <div class="flex my-2 justify-center flex-col">
      <div class="flex justify-center py-4 xs:flex-col md:flex-row">
        @foreach (RouteHelpers::getRoutesByPrefix('web') as $name => $route)
          <x-nav.link
            class="mx-2 text-gray-200"
            :href="route($name)"
            :active="request()->routeIs($name)"
          >
            {{ __(RouteHelpers::cleanRouteName($name)) }}
          </x-nav.link>
        @endforeach
      </div>
      <x-layout.social :social-links="$socialLinks"></x-layout.social>
    </div>

    <x-layout.copyright :copy="$copy"></x-layout.copyright>
  </div>

</v-footer>
