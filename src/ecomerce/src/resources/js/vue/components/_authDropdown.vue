<template>
	<div>
		<slot
			name="button"
			:onClick="onClick"
		></slot>
		<pv-menu
			ref="menu"
			:model="items"
			:popup="true"
		>
			<template #start>
				<slot name="menu-items"></slot>
			</template>
			<template #item-="{ item }">
				<!-- <slot name="menu-items"></slot> -->
			</template>
		</pv-menu>
	</div>
</template>

<script setup>
import { ref } from 'vue';


const menu = ref(null)

const items = ref([
	{
		label: 'Update',
		icon: 'pi pi-refresh',
		url: 'https://vuejs.org/',
		target: '_blank'
	}
]);


const onClick = (event) => {
	menu.value.toggle(event);
}

</script>