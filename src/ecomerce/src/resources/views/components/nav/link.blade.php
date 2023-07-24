@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center justify-center font-black text-opacity-100'
            : 'inline-flex items-center justify-center font-thin text-opacity-75  hover:text-opacity-100 hover:font-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
