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
});

const emit = defineEmits(['reset-trigger-all-panels']);

const slots = useSlots()

const expansionPanel = ref(null)
const panel = ref([]);

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


const onAllPanels = () =>{
  panel.value = allPanels();
}

const onNonePanels = () =>{
  panel.value = [];
}

const onUpdatePanel = (panel) => {
  // emit('update-panels', panel);
}

watch(()=>props.triggerAllPanels, (triggerAllPanels, prevTriggerAllPanels) => {
  if(triggerAllPanels){
    emit('reset-trigger-all-panels');
    onAllPanels();
  }
})

// const { activePanels } = toRefs(props)
// watch(activePanels, (activePanels, prevActivePanels) => {
//   console.log(activePanels)
// });

</script>