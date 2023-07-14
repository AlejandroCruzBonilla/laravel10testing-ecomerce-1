@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center justify-center p-2 text-gray-900 hover:text-gray-700 hover:bg-gray-200 hover:rounded-md font-bold'
            : 'inline-flex items-center justify-center p-2 text-gray-500 hover:text-gray-700 hover:bg-gray-200 hover:rounded-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
