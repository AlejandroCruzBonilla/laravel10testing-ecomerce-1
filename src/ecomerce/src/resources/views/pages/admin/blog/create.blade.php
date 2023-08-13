@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

    <x-slot name="title">
        {{ __('Blog Create') }}
    </x-slot>

	<wrapper-form-panels>
		<template #={triggerAllPanels,onResetTriggerAllPanels,onFormHasErros}>
			<x-forms.form
				:action="route('admin.blogs.store')"
				method='POST'
				error-event-handler='onFormHasErros'
			>
				@include('pages.admin.blog.partials.form-panels',[
					"activePanels" => '[0]',
					"buttons" => true,
				])
			</x-forms.form>
		</template>
	</wrapper-form-panels>
</x-app-layout>
