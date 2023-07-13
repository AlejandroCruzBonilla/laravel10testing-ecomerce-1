<template>
  <v-layout>
    <nav-bar>
      <template v-slot:navigation_desktop>
        <slot name="navigation_desktop"></slot>
      </template>
    </nav-bar>
    <v-main class="d-flex align-center justify-center">
      <slot name="content"></slot>
    </v-main>
    <v-footer app name="footer">
      <slot name="footer"></slot>
    </v-footer>
  </v-layout>
</template>

<script setup>
import NavBar from './components/Layout/navigation/nav-bar.vue'
import { onMounted } from "vue";


onMounted(function () {
  console.log("Hooray!!! Onmounted() is triggered")
});

</script>
