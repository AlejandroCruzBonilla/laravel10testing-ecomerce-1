@props([
  'value'=> '',
  'prefix' => '',
  'sufix' => '',
  'rules' => '[]',
  'errorMessages' => null,
])

@isset($rules)

@endisset


@php
  if($errorMessages){
    if(gettype($errorMessages) === 'array'){
      $errorMessages = "[".sprintf("'%s'", implode("','",$errorMessages))."]";
    }
  }
  else { $errorMessages = '[]'; }
@endphp

<v-text-field
  variant="outlined"
  model-value="{{$value}}"
  prefix="{{$prefix}}"
  sufix="{{$sufix}}"
  :error-messages="{{$errorMessages}}"
  :rules="{{$rules}}"
  max-errors="5"
  {{ $attributes->merge(['class' => 'mt-1']) }}
  ></v-text-field>