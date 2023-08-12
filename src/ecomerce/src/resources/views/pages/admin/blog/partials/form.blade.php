<div class="mx-auto">
    <form-expansion-panels
      :active-panels='activePanels'
      @all-panels="onAllPanels"
      @update-panels="onUpdatePanel">

        <x-forms.expansion-panel>
            <x-slot name="title">
                {{ __('Fields') }}
            </x-slot>
            <x-slot name="content">
                <div class="input-group mb-3 input_box">
                    <x-forms.input-label for="title" :value="__('Title*')" />
                    <x-forms.text-input id="title" name="title" type="text" class="block w-full" :value="old('title', $blog->title)"
                        autofocus autocomplete="title" required />
                    <x-forms.input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <div class="input-group mb-3 input_box">
                    <rich-text-editor id="body" name="body" value="{{ old('body', $blog->body) }}">
                        <template v-slot:label>
                            <x-forms.input-label for="body" :value="__('Body')" />
                        </template>
                    </rich-text-editor>
                    <x-forms.input-error class="mt-2" :messages="$errors->get('body')" />
                </div>
            </x-slot>
        </x-forms.expansion-panel>

        <x-forms.expansion-panel>
            <x-slot name="title">
                {{ __('Publish') }}
            </x-slot>
            <x-slot name="content">
                @include('pages.admin.partials.forms.common-fields', [
                    'node' => $blog,
                    'slugPrefix' => '/blog/',
                ])
            </x-slot>
        </x-forms.expansion-panel>

        <x-forms.expansion-panel>
            <x-slot name="title">
                {{ __('Meta Tags') }}
            </x-slot>
            <x-slot name="content">
                @include('pages.admin.partials.forms.seo.meta-tags-fields', [
                    'node' => $blog,
                ])
            </x-slot>
        </x-forms.expansion-panel>

    </form-expansion-panels>
</div>
