@props(['icons'])

@define($classes = 'flex justify-center items-center');

<div {{ $attributes->merge(['class' => $classes]) }}>
    @foreach ($icons as $icon => $uri)
        <v-btn class="m-2" href="{{ $uri }}" icon="{{ $icon }}"></v-btn>
    @endforeach
</div>
