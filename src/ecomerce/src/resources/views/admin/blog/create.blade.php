@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-admin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Create') }}
        </h2>
    </x-slot>

    <div class="mx-auto space-y-6">
        <div class="p-4 xs:p-8 bg-white shadow xs:rounded-lg">
            <div>
                <form method="POST" action="{{ route('admin.blog.store') }}">
                    @csrf
                    @include('admin.blog.partials.form')
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>
