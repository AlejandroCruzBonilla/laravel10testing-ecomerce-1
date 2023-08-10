@props(['socialLinks'])

@define($classes = 'flex justify-center items-center');

<div {{ $attributes->merge(['class' => $classes]) }}>
    @foreach ($socialLinks as $link)
        <v-btn
          class="m-2"
          density="comfortable"
          class="m-1"
          icon
          href="{{ $link['href'] }}"
          target="_blank"
        >
            <v-icon>
                <font-awesome-icon icon="{{ $link['icon'] }}">
                </font-awesome-icon>
            </v-icon>
        </v-btn>
    @endforeach
</div>
