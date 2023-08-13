<template>
  <form @submit="onSubmit" ref="form">
    <slot :hasErrors="hasErrors"></slot>

    <input type="hidden" name="_token" :value="csrf">
    <slot name="submit" :onClick="onClick"></slot>

  </form>
</template>

<script setup>
import { ref, onMounted, useSlots } from 'vue';

const props = defineProps({
  csrf: {
    type: String,
    required: true,
  }
})


const slots = useSlots();

const form = ref(null);
const hasErrors = ref(false);

const onSubmit = (event) => {

  event.preventDefault();
  event.stopPropagation();
  console.log(event)

}

const onClick = (event) => {
  event.preventDefault();
  event.stopPropagation();
  // console.log(form.value?.reportValidity());
  // console.log(form.value?.checkValidity());
  form.value?.submit();

  if (!form.value?.checkValidity()) {
    hasErrors.value = true;
  }
  else{
    activePanels.value = props.activePanels
    form.value?.submit();
  } 
}

onMounted(()=>{
  console.log(slots.default.props)
})

</script>