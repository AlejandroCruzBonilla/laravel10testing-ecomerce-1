@props([
    'rounded' => false,
    'onDarkBg' => false,
    'onLightBg' => false,
])

<button
  {{ $attributes->class([
          'rounded-full' => $rounded,
          'rounded-md' => !$rounded,
  
          'btn--primary--on-bg-dark' => $onDarkBg,
  
          'btn--primary--on-bg-light' => $onLightBg,
  
          'btn--primary' => !$onDarkBg && !$onLightBg,

					'btn'
      ])->merge([
          'type' => 'button',
      ]) }}
>
  {{ $slot }}
</button>
