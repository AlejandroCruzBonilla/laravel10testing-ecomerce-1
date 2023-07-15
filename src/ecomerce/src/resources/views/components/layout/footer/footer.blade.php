{{-- 
  * Logo Principal
  * Links
  * Social Links
  * Aviso Privacidad
  * Terminos y condiciones
  * Site-map
  * CopyRigth
  * Direccion
  * Correo
  * Telefono
  * Legales
  * Marcas o logos,
--}}

@define($icons = ['f','a'])
<v-footer>
    @foreach ($icons as $icon)
        {{ $icon }}
    @endforeach
</v-footer>
