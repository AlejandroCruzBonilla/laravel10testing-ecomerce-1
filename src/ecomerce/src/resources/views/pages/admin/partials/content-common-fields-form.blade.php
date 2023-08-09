<div class="input-group mb-3 input_box">
    <x-forms.input-label for="slug" :value="__('Slug')" />
    <x-forms.text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $node->slug)" autofocus
        autocomplete="slug" />
    <x-forms.input-error class="mt-2" :messages="$errors->get('slug')" />
</div>

<div class="input-group mb-3 input_box">
    <label for="status" class="inline-flex items-center">
        <input type="hidden" name="status" value="unpublished">
        <input id="status" type="checkbox" name="status" value="published"
            {{ old('status', $node->status) === 'published' ? 'checked' : '' }}
            class="rounded border-solid border-gray-900 text-indigo-600 shadow-sm focus:ring-indigo-500">
        <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
    </label>
    <x-forms.input-error class="mt-2" :messages="$errors->get('status')" />
</div>
