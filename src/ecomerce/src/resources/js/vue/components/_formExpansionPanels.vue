<template>
  <div ref="slotContainer">
    <v-expansion-panels multiple v-model="panel">
      <slot :setPanels="setPanels"></slot>
    </v-expansion-panels>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
  activePanels: {
    type: Array,
    default: []
  },
  hasErrors: {
    type: Boolean,
    default: false
  }
})

const panel = ref([])
const slotContainer = ref(null)


const setPanels = () => {
  if (!slotContainer.value) return [];
  const panels = slotContainer.value
    .querySelector(':first-child.v-expansion-panels').children;

  const p = []

  for (let index = 0; index < panels.length; index++) {
    p.push(index)
  }
  return p;
}

onMounted(() => {

  panel.value = props.hasErrors
    ? setPanels()
    : props.activePanels

});


</script>