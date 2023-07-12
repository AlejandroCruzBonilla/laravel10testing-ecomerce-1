<template>
  <div>
    <NavBar/>
    <slot name="header"></slot>
    <slot name="content"></slot>
    <slot name="footer"></slot>
    <div class="card flex justify-content-center">
      <Button label="Check" icon="pi pi-check" />
    </div>
  </div>
</template>

<script setup>
import NavBar from './components/Layout/navigation/nav-bar.vue'
import { onMounted } from "vue";


onMounted(function () {
  console.log("Hooray!!! Onmounted() is triggered")
});

</script>
