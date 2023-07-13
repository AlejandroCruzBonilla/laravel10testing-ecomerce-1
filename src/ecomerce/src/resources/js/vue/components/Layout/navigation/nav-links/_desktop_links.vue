<template>
    <v-tab v-for="link in links" :key="link.uri">
      {{ link.name }}
    </v-tab>
</template>


<script >
import { reactive } from "vue";

export default {
  props: {
    raw_links: ''
  },

  setup({ raw_links }) {
    console.log(raw_links)
    const links = reactive(JSON.parse(raw_links))
    console.log(links)

    return {
      links
    }
  }
}


</script>
