<div class="input-group mb-3 input_box">
  <x-forms.input-label for="slug" :value="__('Slug')" />
  <x-forms.text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $node->slug)" required
      autofocus autocomplete="slug" />
  <x-forms.input-error class="mt-2" :messages="$errors->get('slug')" />
</div>

<div class="input-group mb-3 input_box">
  <x-forms.input-label for="status" :value="__('Status')" />
  <x-forms.text-input id="status" name="status" type="text" class="mt-1 block w-full" :value="old('status', $node->status)" required
      autofocus autocomplete="slug" />
  <x-forms.input-error class="mt-2" :messages="$errors->get('status')" />
</div>

<div class="input-group mb-3 input_box">
  <label for="status" class="inline-flex items-center">
    <input id="status" type="checkbox" class="rounded border-gray-900 text-indigo-600 shadow-sm focus:ring-indigo-500" name="status">
    <span class="ml-2 text-sm text-gray-600">{{ __('Published') }}</span>
  </label>
  <v-checkbox label="Status"></v-checkbox>
  <x-forms.input-error class="mt-2" :messages="$errors->get('status')" />
</div>