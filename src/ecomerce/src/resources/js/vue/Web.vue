<template>
  <v-layout class="flex-col">
    <div class="w-full max-w-screen-2xl mx-auto">
      <slot
        name="nav_bar"
        :mobile_menu_drawer="mobile_menu_drawer"
        :toggle_mobile_menu_drawer="toggleMobileMenuDrawer">
      </slot>

      <main>
        <slot name="content"></slot>
      </main>

    </div>
    <slot name="footer"></slot>
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
