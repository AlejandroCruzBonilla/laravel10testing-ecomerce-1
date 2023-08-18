import { createApp } from "vue";
import FontAwesomeIcon from "./lib/fontAwesome";
import vuetify from "./lib/vuetify";

//vue Router 
import { RouterLink } from 'vue-router';

//PrimeVue
import PrimeVue from "primevue/config";
import CustomTailwind from "./lib/primeVue-customTailwind";

import PvDataTable from "primevue/datatable";
import PvColumn from "primevue/column";
import PvMenubar from 'primevue/menubar';
import PvMenu from 'primevue/menu';
import PvSidebar from 'primevue/sidebar';
import PvButton from 'primevue/button';

//CkEditor
import CKEditor from "@ckeditor/ckeditor5-vue";

//Own
import AdminBar from "./components/_adminBar.vue";
import appLayout from "./layout/app.vue";
import AuthDropDown from "./components/_authDropdown.vue";
import Debug from "./components/__debug.vue";
import ExpansionPanels from "./components/_expansionPanels.vue";
import FormComponent from "./components/_form.vue";
import IndexTable from "./components/_indexTable.vue";
import ButtonMenu from "./components/_buttonMenu.vue";
import NavBar from "./components/_navBar.vue";
import RichTextEditor from "./components/_richTextEditor.vue";
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
	app.component("PvDataTable", PvDataTable);
	app.component("PvColumn", PvColumn);
	app.component("PvSidebar", PvSidebar);
	app.component("PvButton", PvButton);
	app.component("PvMenu", PvMenu);

	//CkEditor
	app.use(CKEditor);

	//FontAwesome
	app.component("FontAwesomeIcon", FontAwesomeIcon);

	//Own
	app.component("DebugComponent", Debug);

	app.component("appLayout", appLayout);
	app.component("AdminBar", AdminBar);
	app.component("NavBar", NavBar);
	app.component("AuthDropDown", AuthDropDown);
	app.component("IndexTable", IndexTable);
	app.component("RichTextEditor", RichTextEditor);
	app.component("FormComponent", FormComponent);
	app.component("ButtonMenu", ButtonMenu);
	app.component("ExpansionPanels", ExpansionPanels);
	app.component("WrapperFormPanels", WrapperFormPanels);

	app.mount(appDocument);
}
