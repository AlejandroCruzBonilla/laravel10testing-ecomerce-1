<div class="input-group mb-3 input_box">
  <x-forms.input-label
    :value="__('Slug')"
    for="slug"
  />
  <x-forms.text-input
    :value="old('slug', $node->slug)"
    class="block w-full"
    id="slug"
    name="slug"
    prefix="{{ $slugPrefix }}"
    rules="[validationRules.required('{{ $validationMessages->slug->required }}')]"
    type="text"
  />
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
      {{ old('status', $node->status) === 'published' ? 'checked' : '' }}
      id="status"
      name="status"
      type="checkbox"
      value="published"
    >
    <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
  </label>
</div>
