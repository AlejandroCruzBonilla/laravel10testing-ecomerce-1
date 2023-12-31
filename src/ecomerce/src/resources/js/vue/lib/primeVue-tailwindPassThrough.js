import { usePassThrough } from "primevue/passthrough";
import Tailwind from "primevue/passthrough/tailwind";

//Tailwind customization
const CustomTailwind = usePassThrough(Tailwind,
	{
		column: {
			bodyCell: {
				class: ['ale-22222 dark:text-gray-900']
			}
		}
	},
	{
		merge: true,             // Used to merge PT options. The default is true.
		useMergeProps: false,    // Whether to use Vue's 'mergeProps' method to merge PT options.
		ignoredKeysOnMerge: [],  // Defines keys to ignore during the merge operation. For example; ['panel.title']
		customizer: undefined    // Defines the custom method to merge PT options.
	}
);
export default CustomTailwind;