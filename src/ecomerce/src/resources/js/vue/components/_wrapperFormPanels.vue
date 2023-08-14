<template>
	<slot
		:triggerAllPanels="triggerAllPanels"
		:onResetTriggerAllPanels="onResetTriggerAllPanels"
		:onFormHasErros="onFormHasErros"
	>
	</slot>
</template>

<script setup>
import { ref, watch } from 'vue';


const triggerAllPanels = ref(false);

const onFormHasErros = (hasErrors) => {
	triggerAllPanels.value = hasErrors;
}

const onResetTriggerAllPanels = (event) => {
	triggerAllPanels.value = false;
}

</script>