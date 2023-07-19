@section('title', 'Roles')
@section('description', 'Roles Index')

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <index-table csrf-token="{{ csrf_token() }}" :raw-data="{{ $roles->toJson() }}"
        :items="{{ json_encode($roles->items()) }}"
        :actions="{
            edit: false,
            delete: false
        }"
        :paginator="{
            totalItems: {{ $roles->total() }},
            perPageItems: {{ $roles->perPage() }},
            hasPages: {{ $roles->hasPages() ? 'true' : 'false' }},
            pageItems: {{ $roles->count() }},
            currentPage: {{ $roles->currentPage() }},
            prevPageUrl: '{{ $roles->previousPageUrl() }}',
            nextPageUrl: '{{ $roles->nextPageUrl() }}',
            lastPage: {{ $roles->lastPage() }},
            path: '{{ $roles->getOptions()['path'] }}',
            from: {{ $roles->firstItem() | 0}},
            to: {{ $roles->lastItem() | 0}},
        }">
    </index-table>

    <div class="paginador">{{ $roles->links() }}</div>

</x-admin-layout>
