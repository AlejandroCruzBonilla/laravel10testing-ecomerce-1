<v-expansion-panel class="rounded-lg" >
    <v-expansion-panel-title collapse-icon="fa-brands fa-facebook-f">
		<template #actions="{ expanded }">
			<font-awesome-icon :icon="expanded ? 'fa-solid fa-xmark' : 'fa-solid fa-grip-lines'"></font-awesome-icon>
		</template>
        {{ $title }}
    </v-expansion-panel-title>
    <v-expansion-panel-text eager>
		<div class="p-4">
			{{ $content }}
		</div>
    </v-expansion-panel-text>
</v-expansion-panel>
