{{-- {{ dd(Helpers::getRoutesByPrefix('admin.tags')) }} --}}

@section('title', 'Tag Index')
@section('description', 'Tags Index')

<x-app-layout>

    <x-slot name="title">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>


    @if ($tags->items() && count($tags->items()))
        <index-table csrf-token="{{ csrf_token() }}" :raw-data="{{ $tags->toJson() }}"
            :items="{{ json_encode($tags->items()) }}"
            :actions="{
                edit: true,
                delete: false
            }"
            :paginator="{
                totalItems: {{ $tags->total() }},
                perPageItems: {{ $tags->perPage() }},
                hasPages: {{ $tags->hasPages() ? 'true' : 'false' }},
                pageItems: {{ $tags->count() }},
                currentPage: {{ $tags->currentPage() }},
                prevPageUrl: '{{ $tags->previousPageUrl() }}',
                nextPageUrl: '{{ $tags->nextPageUrl() }}',
                lastPage: {{ $tags->lastPage() }},
                path: '{{ $tags->getOptions()['path'] }}',
                from: {{ $tags->firstItem() | 0 }},
                to: {{ $tags->lastItem() | 0 }},
            }">
        </index-table>
        <div class="paginador">{{ $tags->links() }}</div>
    @endif

    {{-- <debug-component :debug="{{ $tags->toJson() }}"></debug-component> --}}
</x-admin-layout>

{{-- {{dd(gettype($tags->hasPages()))}} --}}
