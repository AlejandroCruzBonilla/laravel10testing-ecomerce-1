@props([
    'node' => null,
    'disabled' => false,
    'name' => false,
    'checkedValue' => false,
    'unCheckedValue' => false,
])

<label
  class="inline-flex items-center"
  for="{{ $name }}"
>
  <input
    name="{{ $name }}"
    type="hidden"
    value="{{ $unCheckedValue }}"
  >
  <input
    class="rounded shadow-sm "
    id="{{ $name }}"
    name="{{ $name }}"
    type="checkbox"
    value="{{ $checkedValue }}"
    {{ $attributes->class(['input__checkbox']) }}
    {{-- {{ old($name, isset($node) ? $node[$name] : '') === $checkedValue ? 'checked' : '' }} --}}
    @checked(old($name, isset($node) ? $node[$name] : '') === $checkedValue ? true : false)
  >

  <span class="ml-2 text-sm">
    {{ $slot }}
  </span>
</label>
