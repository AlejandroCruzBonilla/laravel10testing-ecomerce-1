<template>
	<div :class="[
		'layout',
		hasAdminRole ? 'administer' : ''
	]">

		<slot
			name="admin-bar"
			:onAdminBarHeight="onAdminBarHeight"
		></slot>

		<slot
			name="nav"
			:adminBarHeight="adminBarHeight"
			:onNavBarHeight="onNavBarHeight"
			:mobileMenuDrawer="mobileMenuDrawer"
			:onToggleMobileMenuDrawer="onToggleMobileMenuDrawer"
		>
		</slot>

		<slot
			name="drawer"
			:mobileMenuDrawer="mobileMenuDrawer"
			:onToggleMobileMenuDrawer="onToggleMobileMenuDrawer"
		>
		</slot>

		<main id="main">
			<div class="main-wrapper">
				<slot name="content"></slot>
			</div>
		</main>

		<slot name="footer"></slot>

	</div>
</template>

<script setup>
import { onMounted, ref } from "vue";

const props = defineProps({
	hasAdminRole: {
		type: Boolean,
		default: false
	}
})

const mobileMenuDrawer = ref(false)
const adminBarHeight = ref(0)
const navBarHeight = ref(0)

const onToggleMobileMenuDrawer = () => {
	mobileMenuDrawer.value = !mobileMenuDrawer.value
}

const onAdminBarHeight = (height) => {
	adminBarHeight.value = height
}

const onNavBarHeight = (height) => {
	navBarHeight.value = height
}

const heighToPx = (height) => `${height}px`

onMounted(function () {
	console.log("app Layout")
});

</script>

<style>
.layout .header {
	/* top: calc(v-bind(heighToPx(adminBarHeight)) + 5px); */
	top: v-bind(heighToPx(adminBarHeight));
}

.layout main {
	margin-top: calc(v-bind(heighToPx(adminBarHeight)) + v-bind(heighToPx(navBarHeight)) + 20px);
}
</style>