@section('title', 'Roles')
@section('description', 'Roles Index')

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>
    @foreach ($roles as $role)
        <h1>{{ $role }}</h1>
    @endforeach

    <div class="paginador">{{ $roles->links() }}</div>
</x-admin-layout>
