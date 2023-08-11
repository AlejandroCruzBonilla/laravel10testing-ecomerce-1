@props([
  'value'=> '',
  'prefix' => '',
  'sufix' => ''
])

{{-- <input 
  {{ $disabled ? 'disabled' : '' }}
  {!! $attributes->merge(['class' => 'mt-1']) !!}> --}}

<v-text-field
  variant="outlined"
  model-value="{{$value}}"
  prefix="{{$prefix}}"
  sufix="{{$sufix}}"
  {{ $attributes->merge(['class' => 'mt-1']) }}
></v-text-field>