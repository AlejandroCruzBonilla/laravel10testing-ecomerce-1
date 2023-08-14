@section('title', 'Blog Create')
@section('description', 'Blog Create')

<x-app-layout>

  <x-slot name="title">
    {{ __('Blog Create') }}
  </x-slot>

  @if ($errors->get('title'))
    {{-- {{dd()}} --}}
  @endif

  <wrapper-form-panels>
    <template #={triggerAllPanels,onResetTriggerAllPanels,onFormHasErros}>
      <x-forms.form :action="route('admin.blogs.store')" error-event-handler='onFormHasErros' method='POST'>
        @include('pages.admin.blog.partials.form-panels', [
            'activePanels' => '[0]',
            'buttons' => true,
        ])
      </x-forms.form>
    </template>
  </wrapper-form-panels>
</x-app-layout>
