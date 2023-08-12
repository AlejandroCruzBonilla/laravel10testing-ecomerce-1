@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

    <x-slot name="title">
        {{ __('Blog Create') }}
    </x-slot>

	{{-- {{dd($validationMessages)}} --}}

	{{-- @if ($errors->count())
		{{dd($errors)}}
	@endif --}}

   <form-component
		action="{{ route('admin.blogs.store') }}"
		csrf="{{ csrf_token() }}"
		method="POST"
		:active-panels=[0]
		:has-errors={{$errors->count()?'true':'false'}}
	>
		<template #={activePanels,onUpdatePanel,onAllPanels}>
			@include('pages.admin.blog.partials.form')
		</template>

        <template #submit={onClick}>
            <div class="flex items-center my-4">
                <x-common.primary-button @click="onClick">
                    {{ __('Save') }}
                </x-common.primary-button>
            </div>
        </template>

    </form-component>


</x-app-layout>
