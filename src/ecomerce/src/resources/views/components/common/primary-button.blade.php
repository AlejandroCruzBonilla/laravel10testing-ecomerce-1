@props([
    'rounded' => false,
    'onDarkBg' => false,
    'onLightBg' => false,
])

<button
  {{ $attributes->class([
          'rounded-full' => $rounded,
          'rounded-md' => !$rounded,
  
          'bg-gray-100 text-gray-800
    					hover:bg-gray-200 focus:bg-gray-200 focus:ring-indigo-500 active:bg-gray-200' => $onDarkBg,
  
          'bg-gray-800 text-gray-100
  					hover:bg-gray-700 focus:bg-gray-700 focus:ring-indigo-500 active:bg-gray-900' => $onLightBg,
  
          'bg-gray-800 text-gray-100
      						dark:bg-gray-100 dark:text-gray-800
      						hover:bg-gray-700 focus:bg-gray-700 focus:ring-indigo-500 active:bg-gray-900
      						hover:dark:bg-gray-200 focus:dark:bg-gray-200 focus:dark:ring-indigo-500 active:dark:bg-gray-200' =>
              !$onDarkBg && !$onLightBg,
  
          'inline-flex items-center justify-center',
          'px-4 py-3',
          'border border-transparent',
          'font-semibold uppercase tracking-widest',
          'focus:outline-none focus:ring-2 focus:ring-offset-2',
          'transition ease-in-out duration-150',
      ])->merge([
          'type' => 'button',
      ]) }}
>
  {{ $slot }}
</button>
