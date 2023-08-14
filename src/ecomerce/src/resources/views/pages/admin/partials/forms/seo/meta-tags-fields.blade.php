<div class="input-group mb-3 input_box">
  <x-forms.input-label
    :value="__('Title')"
    for="meta[title]"
  />
  <x-forms.text-input
    :value="old('meta[title]', '')"
    class="block w-full"
    id="meta-title"
    name="meta[title]"
    rules="[validationRules.required('{{ __($validationMessages->meta->title->required) }}')]"
    type="text"
  />
</div>

<div class="input-group mb-3 input_box">
  <x-forms.input-label
    :value="__('Description')"
    for="meta[description]"
  />
  <x-forms.text-input
    :value="old('meta[description]', '')"
    class="block w-full"
    id="meta-description"
    name="meta[description]"
    rules="[validationRules.required('{{ __($validationMessages->meta->description->required) }}')]"
    type="text"
  />
</div>
