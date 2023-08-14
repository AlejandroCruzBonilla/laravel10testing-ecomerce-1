import { createApp } from "vue";
import FontAwesomeIcon from "./lib/fontAwesome";
import vuetify from "./lib/vuetify";

//PrimeVue
import PrimeVue from "primevue/config";
import DataTable from "primevue/datatable";
import Column from "primevue/column";

//CkEditor
import CKEditor from "@ckeditor/ckeditor5-vue";

//Own
import appLayout from "./layout/app.vue";
import Debug from "./components/__debug.vue";
import IndexTable from "./components/_indexTable.vue";
import RichTextEditor from "./components/_richTextEditor.vue";
import FormVue from "./components/_form.vue";
import ExpansionPanels from "./components/_expansionPanels.vue";
import WrapperFormPanels from "./components/_wrapperFormPanels.vue";

//VueApp
const appDocument = document.querySelector("#app");

if (appDocument) {
	const app = createApp();

	//Vuetify
	app.use(vuetify);

	//PrimeVue
	app.use(PrimeVue, { unstyled: true });
	app.component("DataTable", DataTable);
	app.component("Column", Column);

	//CkEditor
	app.use(CKEditor);

	//FontAwesome
	app.component("FontAwesomeIcon", FontAwesomeIcon);

	//Own
	app.component("appLayout", appLayout);

	app.component("DebugComponent", Debug);

	app.component("IndexTable", IndexTable);
	app.component("RichTextEditor", RichTextEditor);
	app.component("FormVue", FormVue);
	app.component("ExpansionPanels", ExpansionPanels);
	app.component("WrapperFormPanels", WrapperFormPanels);

	app.mount(appDocument);
}
