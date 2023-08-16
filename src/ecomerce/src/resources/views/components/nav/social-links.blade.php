@props(['socialLinks'])

@define($classes = 'flex justify-center items-center');

<div {{ $attributes->merge(['class' => $classes]) }}>
  @foreach ($socialLinks as $link)
    <a
      href="{{ $link['href'] }}"
      target="_blank"
    >
		<x-common.primary-button rounded on-dark-bg class="m-2 text-2xl w-12 h-12 bg-gray-100">
      <font-awesome-icon  icon="{{ $link['icon'] }}"></font-awesome-icon>
		</x-common.primary-button>
    </a>
  @endforeach
</div>
