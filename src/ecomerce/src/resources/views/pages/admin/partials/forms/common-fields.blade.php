<div class="input-group mb-3 input_box">
  <x-forms.input-label
    for="slug"
    :value="__('Slug')"
  />
  <x-forms.text-input
    class="block w-full"
    id="slug"
    name="slug"
    type="text"
    :value="old('slug', $node->slug)"
    :error-messages="$errors->get('slug')"
    prefix="{{ $slugPrefix }}"
    rules="[validationRules.required('{{ $validationMessages->slug->required }}')]"
  />
  {{-- <x-forms.input-error
    class="mt-2"
    :messages="$errors->get('slug')"
  /> --}}
</div>

<div class="input-group mb-3 input_box">
  <label
    class="inline-flex items-center"
    for="status"
  >
    <input
      name="status"
      type="hidden"
      value="unpublished"
    >
    <input
      id="status"
      name="status"
      type="checkbox"
      value="published"
      {{ old('status', $node->status) === 'published' ? 'checked' : '' }}
    >
    <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
  </label>
</div>
