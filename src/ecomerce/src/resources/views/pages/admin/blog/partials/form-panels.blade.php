<x-common.expansion-panels 
	:active-panels=$activePanels
	:buttons=$buttons
	reset-trigger-all-panels="onResetTriggerAllPanels"
>
	<x-common.expansion-panel>
		<x-slot name="title">
			{{ __('Fields') }}
		</x-slot>
		<x-slot name="content">
			<div class="input-group mb-3 input_box">
				<x-forms.input-label for="title" :value="__('Title')" />
				<x-forms.text-input
				  id="title"
				  name="title"
				  type="text"
				  class="block w-full"
				  :value="old('title', $blog->title)"
          {{-- :error-messages="$errors->get('title')" --}}
          rules="[
            validationRules.required('{{
              __($validationMessages->title->required)
            }}'),
            validationRules.min('minimo',4),
            {{-- validationRules.test() --}}
          ]"
        />
				{{-- <x-forms.input-error class="mt-2" :messages="$errors->get('title')" /> --}}
			</div>

			<div class="input-group mb-3 input_box">
				<rich-text-editor id="body" name="body" value="{{ old('body', $blog->body) }}">
					<template v-slot:label>
						<x-forms.input-label for="body" :value="__('Body')" />
					</template>
				</rich-text-editor>
			</div>
		</x-slot>
	</x-common.expansion-panel>

	<x-common.expansion-panel>
		<x-slot name="title">
			{{ __('Publish') }}
		</x-slot>
		<x-slot name="content">
			@include('pages.admin.partials.forms.common-fields', [
				'node' => $blog,
				'slugPrefix' => '/blog/',
			])
		</x-slot>
	</x-common.expansion-panel>

	<x-common.expansion-panel>
		<x-slot name="title">
			{{ __('Meta Tags') }}
		</x-slot>
		<x-slot name="content">
			@include('pages.admin.partials.forms.seo.meta-tags-fields', [
				'node' => $blog,
			])
		</x-slot>
	</x-common.expansion-panel>

</x-common.expansion-panels>