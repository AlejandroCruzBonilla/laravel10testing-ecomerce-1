@section('title', 'Blog Index')
@section('description', 'Blogs Index')

<x-admin-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    @if ($blogs->items() && count($blogs->items()))
        <index-table csrf-token="{{ csrf_token() }}" :raw-data="{{ $blogs->toJson() }}"
            :items="{{ json_encode($blogs->items()) }}"
            :actions="{
                edit: false,
                delete: false
            }"
            :paginator="{
                totalItems: {{ $blogs->total() }},
                perPageItems: {{ $blogs->perPage() }},
                hasPages: {{ $blogs->hasPages() ? 'true' : 'false' }},
                pageItems: {{ $blogs->count() }},
                currentPage: {{ $blogs->currentPage() }},
                prevPageUrl: '{{ $blogs->previousPageUrl() }}',
                nextPageUrl: '{{ $blogs->nextPageUrl() }}',
                lastPage: {{ $blogs->lastPage() }},
                path: '{{ $blogs->getOptions()['path'] }}',
                from: {{ $blogs->firstItem() | 0 }},
                to: {{ $blogs->lastItem() | 0 }},
            }">
        </index-table>
        <div class="paginador">{{ $blogs->links() }}</div>
    @endif

</x-admin-layout>
