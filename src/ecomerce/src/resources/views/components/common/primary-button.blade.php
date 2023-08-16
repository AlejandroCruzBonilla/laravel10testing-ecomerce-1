@props([
    'rounded' => false,
    'onDarkBg' => false,
    'onLightBg' => false,
])

<button
  {{ $attributes->class([
          'rounded-full' => $rounded,
          'rounded-md' => !$rounded,
  
          'primary-dark-bg' => $onDarkBg,
  
          'primary-light-bg' => $onLightBg,
  
          'primary' => !$onDarkBg && !$onLightBg,
  
          'regular-button',
      ])->merge([
          'type' => 'button',
      ]) }}
>
  {{ $slot }}
</button>
