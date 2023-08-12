<template>
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
    type: [Array, String],
    default: [],
  }
})

const emit = defineEmits(['all-panels','update-panels'])

const slots = useSlots()

const expansionPanel = ref(null)
const panel = ref([])

const allPanels = () => {
  if (!slots.default().length) return [];

  const p = []
  for (let index = 0; index < slots.default().length; index++) {
    p.push(index)
  }
  return p;
}

const onUpdatePanel = (panel) => {
  emit('update-panels', panel);
}

watch(() => props.activePanels, (activePanels, prev) => {
  console.log({activePanels})
  panel.value = activePanels
})

// const { activePanels } = toRefs(props)
// watch(activePanels, (activePanels, prevActivePanels) => {
//   console.log(activePanels)
// });

onMounted(() => {
  emit('all-panels', allPanels());
})

</script>