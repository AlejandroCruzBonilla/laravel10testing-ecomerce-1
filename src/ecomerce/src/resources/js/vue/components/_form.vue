<template>
	<v-form ref="form">
		<slot
			:hasErrors="hasErrors"
			:validationRules="validationRules"
		></slot>

		<input
			type="hidden"
			name="_token"
			:value="csrf"
		>
		<slot
			name="submit"
			:onClick="onClick"
		></slot>

	</v-form>
</template>

<script setup>
import { ref, onMounted, reactive } from 'vue';

const props = defineProps({
	hasErrors: {
		type: Boolean,
		default: false,
	},
	csrf: {
		type: String,
		required: true,
	}
})

const emit = defineEmits(['form-has-errors']);

const form = ref(null);
const validationRules = reactive({
	required: (message) => {
		return value => !!value || message
	},
	min: (message, min) => {
		return value => !!(value.length >= min) || message
	},
	test: () => {
		return false || "message"
	}
});

const hasErrors = ref(props.hasErrors);

const onClick = (event) => {
	event.preventDefault();
	event.stopPropagation();

	form.value.validate()
		.then(({ valid }) => {
			if (!form.value?.checkValidity() || !valid) {
				hasErrors.value = true;
				emit('form-has-errors', hasErrors.value);
			}
			else {
				form.value?.submit();
			}
		})
		.catch(error => {
			console.log({ error })
		});
}

onMounted(() => {
	if (hasErrors.value === true) {
		emit('form-has-errors', hasErrors.value);
		form.value.validate()
	}
})

</script>