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
				<slot name="start"></slot>
			</template>
			<template #item="{ item }">
				<slot name="items" :item="item"></slot>
			</template>
			<template #end>
				<slot name="end"></slot>
			</template>
		</pv-menu>
	</div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
	items: {
		type: Array,
		default: []
	}
})

const menu = ref(null)




const onClick = (event) => {
	menu.value.toggle(event);
}

</script>