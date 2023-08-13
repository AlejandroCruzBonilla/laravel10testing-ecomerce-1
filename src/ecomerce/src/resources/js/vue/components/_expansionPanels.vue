<template>
  <slot
    name="buttons"
    :onAllPanels="onAllPanels"
    :onNonePanels="onNonePanels"></slot>
  <v-expansion-panels
    multiple
    v-model="panel"
    ref="expansionPanel"
    @update:model-value="onUpdatePanel">
    <slot></slot>
  </v-expansion-panels>
</template>

<script setup>

import { ref, watch, onMounted, useSlots } from 'vue';

const props = defineProps({
  activePanels: {
    type: Array,
    default: [],
  },
  triggerAllPanels: {
    type: Boolean,
    default: false
  }
})

const slots = useSlots()

const expansionPanel = ref(null)
const panel = ref([])
// const triggerAllPanels = ref(props.triggerAllPanels)


const allPanels = () => {
  if (!slots.default().length) return [];

  const p = []
  for (let index = 0; index < slots.default().length; index++) {
    p.push(index)
  }
  return p;
}

onMounted(() => {
  panel.value = props.activePanels
})

// watch(toggleAllPanels, (toggleAllPanels, prevToggleAllPanels) => {
//   console.log(toggleAllPanels)
//   if(toggleAllPanels) panel.value = allPanels()
//   else panel.value = [];
// })


const onAllPanels = () =>{
  panel.value = allPanels();
}

const onNonePanels = () =>{
  panel.value = [];
}

const onUpdatePanel = (panel) => {
  // emit('update-panels', panel);
  
}

// const { activePanels } = toRefs(props)
// watch(activePanels, (activePanels, prevActivePanels) => {
//   console.log(activePanels)
// });

</script>