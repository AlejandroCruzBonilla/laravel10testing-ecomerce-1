@props([
    'activePanels' => '[]',
    'buttons' => false,
    'resetTriggerAllPanels' => '',
])

<expansion-panels
  :active-panels={{ $activePanels }}
  @reset-trigger-all-panels="{{ $resetTriggerAllPanels }}"
  :trigger-all-panels="triggerAllPanels"
>
  @if ($buttons)
    <template #buttons={onAllPanels,onNonePanels}>
      <x-common.primary-button
        @click="onAllPanels"
        class="mb-2 mr-2"
        type="button"
      >
        {{ __('Expand All') }}
      </x-common.primary-button>
      <x-common.primary-button
        @click="onNonePanels"
        class="mb-2 ml-2"
        type="button"
      >
        {{ __('Collapse All') }}
      </x-common.primary-button>
    </template>
  @endif
  {{ $slot }}
</expansion-panels>
