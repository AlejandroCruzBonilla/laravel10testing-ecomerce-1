@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

    <x-slot name="title">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Create') }}
        </h2>
    </x-slot>

    
    <div>
        <form method="POST" action="{{ route('admin.blog.store') }}">
            @csrf
            @include('pages.admin.blog.partials.form')
        </form>
    </div>
 

</x-admin-layout>
