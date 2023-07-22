import { createApp } from "vue";

//Vuetify Imports
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

const vuetify = createVuetify({
    components,
    directives,
});

//PrimeVue
import PrimeVue from "primevue/config";
import DataTable from "primevue/datatable";
import Column from "primevue/column";

//CkEditor
import CKEditor from '@ckeditor/ckeditor5-vue';

//Own
import AdminApp from "./layouts/Admin.vue";
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
    // adminApp.use(PrimeVue);
    // adminApp.use(PrimeVue, { ripple: true ,unstyled: true});
    adminApp.use(PrimeVue, { unstyled: true });
    adminApp.component("DataTable", DataTable);
    adminApp.component("Column", Column);
    // adminApp.component("Row", Row);
    
    //CkEditor
    adminApp.use(CKEditor);

    //Own
    adminApp.component("AdminApp", AdminApp);
    adminApp.component("DebugComponent", Debug);

    adminApp.component("IndexTable", IndexTable);
    adminApp.component("RichTextEditor", RichTextEditor);



    adminApp.mount(app);
}

const editor = document.querySelector("#editor");

