@section('title', 'Blog Index')
@section('description', 'Blogs Index')

<x-app-layout>

  <x-slot name="title">
    {{ __('Blogs') }}
  </x-slot>

  <x-common.primary-button-link
    class="mb-2"
    :href="route('admin.blogs.create')"
  >
    {{ __('Create New') }}
  </x-common.primary-button-link>


  @if ($blogs->items() && count($blogs->items()))
    <index-table
      :raw-data="{{ $blogs->toJson() }}"
      :items="{{ json_encode($blogs->items()) }}"
      :actions="{
          edit: true,
          delete: true
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
      }"
      csrf-token="{{ csrf_token() }}"
    >
      <template #edit-btn-link={id,tablePagination}>
        <x-common.primary-button-link
          class="m-2"
          v-bind:href="`${tablePagination.path}/${id}/edit`"
        >
          {{ __('Edit') }}
        </x-common.primary-button-link>
      </template>
      <template #delete-btn-link={id,tablePagination}>
        <x-common.primary-button-link
          class="m-2"
          v-bind:href="`${tablePagination.path}/${id}`"
        >
          {{ __('Delete') }}
        </x-common.primary-button-link>
      </template>
    </index-table>
    <div class="paginador">{{ $blogs->links() }}</div>
  @endif

</x-app-layout>
