<template>
  <v-layout class="justify-center">
    <div class="flex flex-col w-full max-w-screen-2xl">
      <slot name="nav_bar" :mobile_menu_drawer="mobile_menu_drawer" :toggle_mobile_menu_drawer="toggleMobileMenuDrawer">
      </slot>

      <v-main id="main">
        <slot name="content"></slot>
      </v-main>
      <slot name="footer"></slot>
    </div>
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
