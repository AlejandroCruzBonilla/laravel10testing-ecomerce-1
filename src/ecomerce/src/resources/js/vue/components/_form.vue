<template>
  <form @submit="onSubmit" ref="form">
    <slot :hasErrors="hasErrors"></slot>

    <input type="hidden" name="_token" :value="csrf">
    <slot name="submit" :onClick="onClick"></slot>

  </form>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  hasErrors: {
    type: Boolean,
    default: false,
  },
  csrf: {
    type: String,
    required: true,
  }
})

const emit = defineEmits(['form-has-erros']);

const form = ref(null);
const hasErrors = ref(props.hasErrors);

const onSubmit = (event) => {
  event.preventDefault();
  event.stopPropagation();
  console.log(event)
}

const onClick = (event) => {
  event.preventDefault();
  event.stopPropagation();
  // console.log();
  // console.log(form.value?.reportValidity());
  // console.log(form.value?.checkValidity());

  if (!form.value?.checkValidity()) {
    hasErrors.value = true;
    emit('form-has-erros', hasErrors.value);

    //TODO: TOMORROW Trigger Show Errors
    form.value.querySelectorAll('input:not([type="hidden"])').forEach(input => {
      input.reportValidity()
    });
    // form.value?.submit();
  }
  else{
    form.value?.submit();
  } 
}

onMounted(()=>{
  if(hasErrors){
    emit('form-has-erros', hasErrors.value);
  }
})

</script>