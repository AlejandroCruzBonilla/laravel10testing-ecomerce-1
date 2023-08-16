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
    {{-- :error-messages="$errors->get('slug')" --}}
    {{-- prefix="{{ $slugPrefix }}" --}}
    {{-- rules="[validationRules.required('{{ $validationMessages->slug->required }}')]" --}}
  />
  <x-forms.input-error
    class="mt-2"
    :messages="$errors->get('slug')"
  />
</div>

<div class="input-group mb-3 input_box">
  <x-forms.checkbox-input
    name="status"
    :node="$node"
    checkedValue="published"
    unCheckedValue="unpublished"
  >
    {{ __('Published') }}
  </x-forms.checkbox-input>
  <x-forms.input-error
    class="mt-2"
    :messages="$errors->get('status')"
  />
</div>
