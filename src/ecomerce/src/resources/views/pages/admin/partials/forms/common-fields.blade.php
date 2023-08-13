<div class="input-group mb-3 input_box">
    <x-forms.input-label for="slug" :value="__('Slug')" />
    <x-forms.text-input
      id="slug"
      name="slug"
      type="text"
      class="block w-full"
      :value="old('slug', $node->slug)"
      autofocus
      prefix="{{ $slugPrefix }}"
      autocomplete="slug"
	  required />
    <x-forms.input-error class="mt-2" :messages="$errors->get('slug')" />
</div>

<div class="input-group mb-3 input_box">
    <label for="status" class="inline-flex items-center">
        <input type="hidden" name="status" value="unpublished">
        <input
			id="status"
			type="checkbox"
			name="status"
			{{ old('status', $node->status) === 'published' ? 'checked' : '' }}
			value="published">
        <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
    </label>
    <x-forms.input-error class="mt-2" :messages="$errors->get('status')" />
</div>
