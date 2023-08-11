<div class="mx-auto">
	{{-- @if ($errors->count())
		{{dd($errors)}}
	@endif --}}
	<form-expansion-panels 
		:active-panels='[0]'
		:has-errors={{$errors->count()?'true':'false'}}>

			<x-forms.expansion-panel>
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
							autofocus
							required
							autocomplete="title" />
						<x-forms.input-error class="mt-2" :messages="$errors->get('title')" />
					</div>
	
					<div class="input-group mb-3 input_box">
						<rich-text-editor
							id="body"
							name="body"
							value="{{ old('body', $blog->body) }}">
							<template v-slot:label>
								<x-forms.input-label for="body" :value="__('Body')" />
							</template>
						</rich-text-editor>
						<x-forms.input-error class="mt-2" :messages="$errors->get('body')" />
					</div>
				</x-slot>
			</x-forms.expansion-panel>
	
			<x-forms.expansion-panel>
				<x-slot name="title">
					{{ __('Publish') }}
				</x-slot>
				<x-slot name="content">
					@include('pages.admin.partials.forms.common-fields', [
						'node' => $blog,
						'slugPrefix' => '/blog/',
					])
				</x-slot>
			</x-forms.expansion-panel>
	
			<x-forms.expansion-panel>
				<x-slot name="title">
					{{ __('Seo') }}
				</x-slot>
				<x-slot name="content">
					@include('pages.admin.partials.forms.seo.expansion-panels', [
						'node' => $blog,
					])
				</x-slot>
			</x-forms.expansion-panel>

    </form-expansion-panels>

    <div class="flex items-center my-4">
        <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>
    </div>

</div>
