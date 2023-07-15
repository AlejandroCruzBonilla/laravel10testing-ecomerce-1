@php
    $icons = [
        'mdi-facebook' => 'https://facebook.com',
        'mdi-twitter' => 'https://twitter.com',
        'mdi-linkedin' => 'https://linkedin.com',
        'mdi-instagram' => 'https://instagram.com',
    ];
    
    $classes = 'flex justify-center items-center';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @foreach ($icons as $icon => $uri)
        <v-btn class="m-2" href="{{ $uri }}" icon="{{ $icon }}"></v-btn>
    @endforeach
</div>
