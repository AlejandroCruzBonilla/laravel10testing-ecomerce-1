<template>
    <slot
      :activePanels="activePanels"
      :onAllPanels="onAllPanels"
      :onUpdatePanel="onUpdatePanel">
    </slot>

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
})

const activePanels = ref([])
const allPanels = ref([])


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