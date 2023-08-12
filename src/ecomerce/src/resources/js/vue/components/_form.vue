<template>
  <form @submit="onSubmit" ref="form">
    <slot
      :activePanels="activePanels"
      :onAllPanels="onAllPanels"
      :onUpdatePanel="onUpdatePanel"></slot>

    <input type="hidden" name="_token" :value="csrf">
    <slot name="submit" :onClick="onClick"></slot>

  </form>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  activePanels: {
    type: [Array, String],
    default: []
  },
  hasErrors: {
    type: Boolean,
    default: false
  },
  csrf: {
    type: String,
    required: true,
  }
})

const form = ref(null);
const activePanels = ref([])
const allPanels = ref([])

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
    activePanels.value = allPanels.value;
  }
  else{
    activePanels.value = props.activePanels
    form.value?.submit();
  } 
}

const onAllPanels = (panels) =>{
  allPanels.value = panels;
}

const onUpdatePanel = (panels) =>{
  activePanels.value = panels;
}

onMounted(() => {
  activePanels.value = props.hasErrors
    ? allPanels.value
    : props.activePanels
});
</script>