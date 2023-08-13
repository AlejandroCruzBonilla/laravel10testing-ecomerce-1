<div class="input-group mb-3 input_box">
    <x-forms.input-label for="meta[title]" :value="__('Title')" />
    <x-forms.text-input
		id="meta-title"
		name="meta[title]"
		type="text"
		class="block w-full"
		:value="old('meta[title]', '')"
		autofocus
		autocomplete="meta[title]"
		required />
    <x-forms.input-error class="mt-2" :messages="$errors->get('meta.title')" />
</div>

<div class="input-group mb-3 input_box">
    <x-forms.input-label for="meta[description]" :value="__('Description')" />
   <x-forms.text-input
		id="meta-description"
		name="meta[description]"
		type="text"
		class="block w-full"
		:value="old('meta[description]', '')"
		autofocus
		autocomplete="meta[description]"
		required 
	/>
    <x-forms.input-error class="mt-2" :messages="$errors->get('meta.description')" />
</div>
