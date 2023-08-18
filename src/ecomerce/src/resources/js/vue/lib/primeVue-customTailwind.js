import { usePassThrough } from "primevue/passthrough";
// import Tailwind from "primevue/passthrough/tailwind";
import Tailwind from "./primeVue-tailwindPassThrough";

//Tailwind customization
const CustomTailwind = usePassThrough(Tailwind,
	{},
	{
		merge: true,
		useMergeProps: true,
	}
);

export default CustomTailwind;