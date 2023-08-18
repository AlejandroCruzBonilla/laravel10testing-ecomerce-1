@props([
    'disabled' => false,
    // 'value' => '',
    // 'prefix' => '',
    // 'sufix' => '',
    // 'rules' => '[]',
    // 'errorMessages' => null,
])

{{-- @isset($rules)
@endisset --}}


{{-- @php
  if ($errorMessages) {
      if (gettype($errorMessages) === 'array') {
          $errorMessages = '[' . sprintf("'%s'", implode("','", $errorMessages)) . ']';
      }
  } else {
      $errorMessages = '[]';
  }
@endphp --}}


<input
  {{ $disabled ? 'disabled' : '' }}
  {{ $attributes->class(['input__text'])->merge(['type' => 'text']) }}
>

{{-- <v-text-field
  max-errors="5"
  model-value="{{ $value }}"
  prefix="{{ $prefix }}"
  sufix="{{ $sufix }}"
  variant="outlined"
  :error-messages="{{ $errorMessages }}"
  :rules="{{ $rules }}"
  {{ $attributes->merge(['class' => 'mt-1']) }}
></v-text-field> --}}
