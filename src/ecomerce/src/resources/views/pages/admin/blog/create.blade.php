@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

    <x-slot name="title">
		{{ __('Blog Create') }}
    </x-slot>

    <div>
        <form method="POST" action="{{ route('admin.blog.store') }}">
            @csrf
            @include('pages.admin.blog.partials.form')
        </form>
    </div>

</x-app-layout>
