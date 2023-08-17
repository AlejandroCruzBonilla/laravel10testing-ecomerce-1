import { createApp } from "vue";
import FontAwesomeIcon from "./lib/fontAwesome";
import vuetify from "./lib/vuetify";

//vue Router 
import { RouterLink } from 'vue-router';

//PrimeVue
import PrimeVue from "primevue/config";
import CustomTailwind from "./lib/primeVue-tailwindPassThrough";

import DataTable from "primevue/datatable";
import Column from "primevue/column";
import Menubar from 'primevue/menubar';
import Sidebar from 'primevue/sidebar';
import Button from 'primevue/button';

//CkEditor
import CKEditor from "@ckeditor/ckeditor5-vue";

//Own
import appLayout from "./layout/app.vue";
import Debug from "./components/__debug.vue";
import NavBar from "./components/_navBar.vue";
import AdminBar from "./components/_adminBar.vue";
import IndexTable from "./components/_indexTable.vue";
import RichTextEditor from "./components/_richTextEditor.vue";
import FormVue from "./components/_form.vue";
import ExpansionPanels from "./components/_expansionPanels.vue";
import WrapperFormPanels from "./components/_wrapperFormPanels.vue";

//VueApp
const appDocument = document.querySelector("#app");

if (appDocument) {
	const app = createApp();

	//vue Router
	app.component('router-link', RouterLink);

	//Vuetify
	app.use(vuetify);

	//PrimeVue
	app.use(PrimeVue, { unstyled: true, pt: CustomTailwind });
	app.component("DataTable", DataTable);
	app.component("Column", Column);
	app.component("pvSidebar", Sidebar);
	app.component("pvButton", Button);
	app.component("menuBar", Menubar);

	//CkEditor
	app.use(CKEditor);

	//FontAwesome
	app.component("FontAwesomeIcon", FontAwesomeIcon);

	//Own
	app.component("DebugComponent", Debug);
	
	app.component("appLayout", appLayout);
	app.component("NavBar", NavBar);
	app.component("AdminBar", AdminBar);
	app.component("IndexTable", IndexTable);
	app.component("RichTextEditor", RichTextEditor);
	app.component("FormVue", FormVue);
	app.component("ExpansionPanels", ExpansionPanels);
	app.component("WrapperFormPanels", WrapperFormPanels);

	app.mount(appDocument);
}
