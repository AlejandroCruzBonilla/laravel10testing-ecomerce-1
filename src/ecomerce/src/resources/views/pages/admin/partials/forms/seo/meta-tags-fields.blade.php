<div class="input-group mb-3 input_box">
  <x-forms.input-label
    for="meta[title]"
    :value="__('Title')"
  />
  <x-forms.text-input
    class="block w-full"
    id="meta-title"
    name="meta[title]"
    type="text"
    :value="old('meta.title', $node->{'meta.title'})"
    {{-- rules="[validationRules.required('{{ __($validationMessages->meta->title->required) }}')]" --}}
  />
  <x-forms.input-error
    class="mt-2"
    :messages="$errors->get('meta.title')"
  />
</div>

<div class="input-group mb-3 input_box">
  <x-forms.input-label
    for="meta[description]"
    :value="__('Description')"
  />
  <x-forms.text-input
    class="block w-full"
    id="meta-description"
    name="meta[description]"
    type="text"
    :value="old('meta.description', $node->{'meta.description'})"
    {{-- rules="[validationRules.required('{{ __($validationMessages->meta->description->required) }}')]" --}}
  />
  <x-forms.input-error
    class="mt-2"
    :messages="$errors->get('meta.description')"
  />
</div>
