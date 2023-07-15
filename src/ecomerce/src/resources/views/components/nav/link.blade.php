@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center justify-center p-2 font-black text-opacity-100'
            : 'inline-flex items-center justify-center p-2 font-light text-opacity-75 hover:text-opacity-100 hover:font-bold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
