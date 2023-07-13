<template>
  <v-layout class="max-w-screen-2xl mx-auto px-2">
    <slot name="nav_bar"></slot>

    <v-main lg class="mx-auto">
      <slot name="content"></slot>
    </v-main>
    <v-footer app name="footer">
      <slot name="footer"></slot>
    </v-footer>
  </v-layout>
</template>

<script setup>
import { onMounted } from "vue";


onMounted(function () {
  console.log("Hooray!!! Onmounted() is triggered")
});

</script>
