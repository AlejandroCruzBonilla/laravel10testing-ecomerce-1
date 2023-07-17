{{-- {{ dd(Helpers::getRoutesByStarting('admin.tags')) }} --}}

@section('title', 'Tags')
@section('description', 'Tags Index')

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>
    @foreach ($tags as $tag)
        <h1>{{ $tag }}</h1>
    @endforeach

    <div class="paginador">{{ $tags->toJson() }}</div>
</x-admin-layout>
