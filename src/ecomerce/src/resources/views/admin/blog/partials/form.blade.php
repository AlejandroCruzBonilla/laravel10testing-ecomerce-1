<div class="input-group mb-3 input_box">
    <x-forms.input-label for="title" :value="__('Title')" />
    <x-forms.text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $blog->title)" required
        autofocus autocomplete="title" />
    <x-forms.input-error class="mt-2" :messages="$errors->get('title')" />
</div>
@include('admin.partials.content-common-fields-form', [
    'node' => $blog,
])
<div class="flex items-center gap-4">
    <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>
</div>
