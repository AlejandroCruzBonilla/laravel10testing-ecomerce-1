<form-component
	action="{{$action}}"
	method="{{$method}}"
	csrf="{{ csrf_token() }}"
	:has-errors={{$errors->count()?'true':'false'}}
>
	<template #={hasErrors}>
		{{$slot}}
	</template>

	<template #submit={onClick}>
		<div class="flex items-center my-4">
			<x-common.primary-button @click="onClick">
				{{ __('Save') }}
			</x-common.primary-button>
		</div>
	</template>

</form-component>