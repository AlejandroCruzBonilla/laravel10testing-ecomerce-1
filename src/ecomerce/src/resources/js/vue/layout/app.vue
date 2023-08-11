<template>
  <v-layout :class="[
    'layout',
    hasAdminRole ? 'administer' : ''
  ]">

    <slot name="admin-bar"></slot>

    <slot name="nav" :mobile_menu_drawer="mobile_menu_drawer" :toggle_mobile_menu_drawer="toggleMobileMenuDrawer">
    </slot>

    <slot name="drawer" :mobile_menu_drawer="mobile_menu_drawer" :toggle_mobile_menu_drawer="toggleMobileMenuDrawer">
    </slot>

    <v-main id="main">
      <div class="main-wrapper">
        <slot name="content"></slot>
      </div>
    </v-main>

    <slot name="footer"></slot>

  </v-layout>
</template>

<script setup>
import { onMounted, ref } from "vue";

const props = defineProps({
  hasAdminRole: {
    type: Boolean,
    default: false
  }
})

const mobile_menu_drawer = ref(false)

const toggleMobileMenuDrawer = () => {
  mobile_menu_drawer.value = !mobile_menu_drawer.value
}

onMounted(function () {
  console.log("app Layout")
});

</script>
