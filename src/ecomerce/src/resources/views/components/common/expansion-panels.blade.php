@props([
    'activePanels' => '[]',
    'buttons' => false,
    'resetTriggerAllPanels' => '',
])

<expansion-panels
  :active-panels={{$activePanels}} 
  :trigger-all-panels="triggerAllPanels"
  @reset-trigger-all-panels="{{$resetTriggerAllPanels}}"
>
    @if ($buttons)
        <template #buttons={onAllPanels,onNonePanels}>
            <x-common.primary-button type="button" class="mb-2 mr-2" @click="onAllPanels">
                {{ __('Expand All') }}
            </x-common.primary-button>
            <x-common.primary-button type="button" class="mb-2 ml-2" @click="onNonePanels">
                {{ __('Collapse All') }}
            </x-common.primary-button>
        </template>
    @endif
    {{ $slot }}
</expansion-panels>
