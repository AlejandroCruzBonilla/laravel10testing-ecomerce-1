<template>
	<div ref="adminBar">
		<slot></slot>
	</div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const emit = defineEmits(['admin-bar-height'])


const adminBar = ref(null)

onMounted(() => {
	emit('admin-bar-height', adminBar.value.getBoundingClientRect().height)
})

</script>