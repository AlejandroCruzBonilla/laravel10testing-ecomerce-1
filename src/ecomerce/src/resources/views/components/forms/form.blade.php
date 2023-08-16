@props([
    'action' => '',
    'method' => '',
    'errorEventHandler' => '',
])

<form-vue
  action="{{ $action }}"
  method="{{ $method }}"
  csrf="{{ csrf_token() }}"
  :has-errors={{ $errors->count() ? 'true' : 'false' }}
  @form-has-errors="{{ $errorEventHandler }}"
>
  <template #={hasErrors,validationRules}>
    {{ $slot }}
  </template>

  <template #submit={onClick}>
    <div class="flex items-center my-4">
      <x-common.primary-button type="submit" @click="onClick">
        {{ __('Save') }}
      </x-common.primary-button>
    </div>
  </template>

</form-vue>
