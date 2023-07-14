<template>
  <v-layout class="max-w-screen-2xl mx-auto px-2">

    <slot name="nav_bar" :mobile_menu_drawer="mobile_menu_drawer" :toggle_mobile_menu_drawer="toggleMobileMenuDrawer">
    </slot>

    <v-main lg class="mx-auto my-4">
      <slot name="content"></slot>
    </v-main>

    <v-footer app name="footer">
      <slot name="footer"></slot>
    </v-footer>
  </v-layout>
</template>

<script setup>
import { onMounted, ref } from "vue";

const mobile_menu_drawer = ref(false)

const toggleMobileMenuDrawer = () => {
  mobile_menu_drawer.value = !mobile_menu_drawer.value
}

onMounted(function () {
  console.log("Hooray!!! Onmounted() is triggered")
});

</script>
