@props(['socialLinks'])

<div {{ $attributes->merge(['class' => 'flex justify-center items-center flex-wrap']) }}>
  @foreach ($socialLinks as $link)
    <a
      href="{{ $link['href'] }}"
      target="_blank"
    >
      <x-common.primary-button
        class="m-2 text-2xl w-12 h-12"
        rounded
        on-dark-bg
      >
        <font-awesome-icon icon="{{ $link['icon'] }}"></font-awesome-icon>
      </x-common.primary-button>
    </a>
  @endforeach
</div>
