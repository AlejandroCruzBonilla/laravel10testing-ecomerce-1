<template>
	<header ref="header">
		<div class="header-wrapper">
			<div class="header-content">
				<slot name="prepend"></slot>
				<slot></slot>
				<slot name="append"></slot>
			</div>
		</div>
	</header>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
	adminBarHeight: {
		type: Number,
		default: 0
	}
})

const header = ref(null)

onMounted(() => {
	const { height } = header.value.getBoundingClientRect()
	let prevScrollPoss = window.scrollY;
	window.onscroll = function () {
		const currentScrollPos = window.scrollY;
		if (prevScrollPoss >= currentScrollPos) {
			header.value.style.top = `${props.adminBarHeight}px`;
		} else {
			header.value.style.top = `-${height}px`;
		}
		prevScrollPoss = currentScrollPos;
	}
})

</script>

<style></style>