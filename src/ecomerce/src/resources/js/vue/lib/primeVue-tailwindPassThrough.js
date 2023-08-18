import { usePassThrough } from "primevue/passthrough";
import Tailwind from "primevue/passthrough/tailwind";

//Tailwind customization
const CustomTailwind = usePassThrough(Tailwind,
	{
		menu: {
			root: {
				class: 'menu menu__root',
			},
		}
	},
	{
		merge: true,
		useMergeProps: false,
	}
);

export default CustomTailwind;