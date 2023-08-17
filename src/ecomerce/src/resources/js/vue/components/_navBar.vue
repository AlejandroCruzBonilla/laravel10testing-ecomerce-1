<template>
	<header>
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

</script>