@section('title', 'Blog Index')
@section('description', 'Blogs Index')

<x-app-layout>

    <x-slot name="title">
		{{ __('Blogs') }}
    </x-slot>

    <x-nav.link 
      class="rounded px-6 py-2 bg-gray-900 mx-2 text-gray-100" 
      :href="route('admin.blogs.create')">
        {{ __('Create New') }}
    </x-nav.link>

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

</x-app-layout>
