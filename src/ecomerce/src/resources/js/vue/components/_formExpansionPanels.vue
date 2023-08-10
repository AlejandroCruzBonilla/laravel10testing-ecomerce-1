<template>
  <v-expansion-panels multiple v-model="panel">
    <slot></slot>
  </v-expansion-panels>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  activePanels: {
    type: Array,
    default: []
  }
})

const panel = ref(props.activePanels)


</script>