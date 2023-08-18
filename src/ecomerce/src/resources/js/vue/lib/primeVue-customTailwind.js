import { usePassThrough } from "primevue/passthrough";
// import Tailwind from "primevue/passthrough/tailwind";
import Tailwind from "./primeVue-tailwindPassThrough";

//Tailwind customization
const CustomTailwind = usePassThrough(Tailwind,
	{
		menu: {
			root: {
				class: ['background--primary'],
			},
		},
	},
	{
		merge: true,
		useMergeProps: true,
	}
);

export default CustomTailwind;