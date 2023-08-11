<form-expansion-panels active-panels='all' :has-errors={{ $errors->count() ? 'true' : 'false' }}>
    <x-forms.expansion-panel>
        <x-slot name="title">
            {{ __('Meta Tags') }}
        </x-slot>
        <x-slot name="content">
            @include('pages.admin.partials.forms.seo.meta-tags-fields', [
                'node' => $node,
            ])
        </x-slot>
    </x-forms.expansion-panel>
</form-expansion-panels>
