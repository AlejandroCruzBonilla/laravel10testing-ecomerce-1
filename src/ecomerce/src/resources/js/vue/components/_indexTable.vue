<template>
	<pv-data-table
		v-if="tableRows.length"
		:lazy="false"
		:paginator="false"
		:rows="tablePagination.perPageItems"
		:totalRecords="tablePagination.totalItems"
		:value="tableRows"
		@page="paginate"
	>
		<pv-column
			v-for="column of tableColumns"
			:key="column.field"
			:field="column.field"
			:header="column.header"
		/>
		<pv-column header="Actions">
			<template #body="{ data: { id } }">
				<slot
					v-if="actions.edit"
					name="edit-btn-link"
					:id="id"
					:tablePagination="tablePagination"
				></slot>
				<!-- TODO Method: DELETE -->
				<slot
					v-if="actions.delete"
					name="delete-btn-link"
					:id="id"
					:tablePagination="tablePagination"
				></slot>
			</template>

		</pv-column>
	</pv-data-table>
</template>

<script>
import { onMounted, ref, reactive } from 'vue';

export default {
	props: {
		csrfToken: {
			type: String,
			required: true
		},

		rawData: {
			type: Object,
			default: {}
		},

		items: {
			type: Array,
			default: []
		},

		actions: {
			type: Object,
			default: {
				edit: false,
				delete: false
			}
		},

		paginator: {
			type: Object,
			default: {
				totalItems: 1,
				perPageItems: 1,
				hasPages: false,
				pageItems: 1,
				currentPage: 1,
				prevPageUrl: '',
				nextPageUrl: '',
				lastPage: 1,
				path: '',
				from: 1,
				to: 1,
			}
		}
	},

	setup({
		csrfToken,
		rawData,
		items,
		paginator,
		actions
	}) {
		const tableRows = ref(items);
		const tableColumns = ref([]);
		const tablePagination = reactive(paginator);

		onMounted(() => {
			console.log({ rawData });
			console.log({ items });
			if (!rawData.data.length) return;
			tableRows.value = items;
			tableColumns.value = setTableColumns(items);
		})

		const setTableColumns = (items = []) => {
			if (!items.length) return [];
			const [element] = items;
			return Object.keys(element).map((key) => (
				{
					field: key,
					header: key.toUpperCase()
				}
			));
		}

		const paginate = (event) => {

			console.log(event);

			const { page } = event;

			// console.log(paginator.path);
			fetch(paginator.path + `?page=${page + 1}`, {
				method: "GET",
				headers: {
					// "X-CSRF-TOKEN':": csrfToken,
					'Authorization': `Bearer ${csrfToken}`,
				},
			})
				.then(response => response.json())
				.then(response => {
					console.log(response)
				})
				.catch(console.error);
		}

		return {
			items,
			tableRows,
			tableColumns,
			tablePagination,
			actions,

			// Methods
			paginate,

		};
	},
}
</script>