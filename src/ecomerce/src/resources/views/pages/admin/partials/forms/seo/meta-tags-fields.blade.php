<div class="input-group mb-3 input_box">
    <x-forms.input-label for="seo[meta-title]" :value="__('Title')" />
    <x-forms.text-input
		id="meta-title"
		name="seo[meta-title]"
		type="text"
		class="block w-full"
		:value="old('seo[meta-title]', '')"
		autofocus
		autocomplete="seo[meta-title]" />
    <x-forms.input-error class="mt-2" :messages="$errors->get('seo[meta-title]')" />
</div>

<div class="input-group mb-3 input_box">
    <x-forms.input-label for="seo[meta-description]" :value="__('Description')" />
    <x-forms.text-input
		id="meta-description"
		name="seo[meta-description]"
		type="text"
		class="block w-full"
		:value="old('seo[meta-description]', '')"
		autofocus
		autocomplete="seo[meta-description]" />
    <x-forms.input-error class="mt-2" :messages="$errors->get('seo[meta-description]')" />
</div>
