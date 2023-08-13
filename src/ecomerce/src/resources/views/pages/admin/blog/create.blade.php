@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

    <x-slot name="title">
        {{ __('Blog Create') }}
    </x-slot>

	<x-forms.form
		action="{{route('admin.blogs.store')}}"
		method='POST'
	>
		@include('pages.admin.blog.partials.form-panels',[
			"activePanels" => '[0]',
			"buttons" => true,
		])
	</x-forms.form>
</x-app-layout>
