<template>
	<div>
		<slot
			name="button"
			:onClick="onClick"
		></slot>
		<pv-menu
			:id="menuId"
			ref="menu"
			:model="items"
			:popup="true"
			:tabindex="-1"
		>
			<template #start>
				<slot name="start"></slot>
			</template>
			<template #item="{ item }">
				<div class="my-2 p-2 text-center hover--background--tertiary hover:font-bold">
					<a
						v-if="item.url"
						:href="item.url"
					>
						<div>
							<font-awesome-icon
								v-if="item.icon"
								:icon="item.icon"
								class="ml-2"
							></font-awesome-icon>
							{{ item.label }}
						</div>
					</a>
					<div v-else>
						<font-awesome-icon
							v-if="item.icon"
							:icon="item.icon"
							class="ml-2"
						></font-awesome-icon>
						{{ item.label }}
					</div>
				</div>
			</template>
			<template #end>
				<slot name="end"></slot>
			</template>
		</pv-menu>
	</div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
	menuId: {
		type: String,
		required: true,
	},
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