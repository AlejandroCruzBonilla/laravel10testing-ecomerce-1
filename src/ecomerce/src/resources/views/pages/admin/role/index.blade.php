@section('title', 'Role Index')
@section('description', 'Roles Index')

<x-app-layout>

  <x-slot name="title">
    {{ __('Roles') }}
  </x-slot>

  @if ($roles->items() && count($roles->items()))
    <index-table
      :raw-data="{{ $roles->toJson() }}"
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
          from: {{ $roles->firstItem() | 0 }},
          to: {{ $roles->lastItem() | 0 }},
      }"
      csrf-token="{{ csrf_token() }}"
    >
    </index-table>
    <div class="paginador">{{ $roles->links() }}</div>
  @endif

</x-app-layout>
