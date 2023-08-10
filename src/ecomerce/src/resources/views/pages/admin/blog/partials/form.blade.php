<div class="input-group mb-3 input_box">
    <x-forms.input-label for="title" :value="__('Title')" />
    <x-forms.text-input
      id="title"
      name="title"
      type="text"
      class="block w-full"
      :value="old('title', $blog->title)"
      autofocus
      required
      autocomplete="title" />
    <x-forms.input-error class="mt-2" :messages="$errors->get('title')" />
</div>

<div class="input-group mb-3 input_box">
    <rich-text-editor id="body" name="body" value="{{old('body', $blog->body )}}">
        <template v-slot:label>
            <x-forms.input-label for="body" :value="__('Body')" />
        </template>
    </rich-text-editor>
</div>

@include('pages.admin.partials.content-common-fields-form', [
    'node' => $blog,
])


<div class="flex items-center gap-4">
    <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>
</div>
