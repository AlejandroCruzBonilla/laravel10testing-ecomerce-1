import { createApp } from "vue";
import FontAwesomeIcon from "./lib/fontAwesome";
import vuetify from "./lib/vuetify";


//PrimeVue
import PrimeVue from "primevue/config";
import DataTable from "primevue/datatable";
import Column from "primevue/column";

//CkEditor
import CKEditor from '@ckeditor/ckeditor5-vue';

//Own
import AdminLayout from "./layout/admin.vue";
import Debug from'./components/__debug.vue';
import IndexTable from'./components/__indexTable.vue';
import RichTextEditor from'./components/__richTextEditor.vue';


//VueApp
const app = document.querySelector("#admin-app");

if (app) {
    const adminApp = createApp();

    //Vuetify
    adminApp.use(vuetify);

    //PrimeVue
    adminApp.use(PrimeVue, { unstyled: true });
    adminApp.component("DataTable", DataTable);
    adminApp.component("Column", Column);
    
    //CkEditor
    adminApp.use(CKEditor);

    //FontAwesome
    adminApp.component('FontAwesomeIcon', FontAwesomeIcon);

    //Own
    adminApp.component("AdminLayout", AdminLayout);
    adminApp.component("DebugComponent", Debug);

    adminApp.component("IndexTable", IndexTable);
    adminApp.component("RichTextEditor", RichTextEditor);

    adminApp.mount(app);
}

