import { createApp } from "vue";
import { router } from "./router";
//
import WebApp from './Web.vue';
//
import PrimeVue from "primevue/config";
import Button from "primevue/button";
import Menu from 'primevue/menu';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';   // optional
import Row from 'primevue/row';     
import Rating from 'primevue/rating';  
import Tag from 'primevue/tag';  
import Toast from 'primevue/toast';
import "primevue/resources/themes/lara-light-blue/theme.css";
// import "primevue/resources/primevue.min.css";


const app = document.querySelector("#web-app");

if (app) {
    const webApp = createApp();
    webApp.use(router);
    webApp.use(PrimeVue, { ripple: true });
    webApp.component("WebApp", WebApp);
    webApp.component("Button", Button);
    webApp.component("Menu", Menu);
    webApp.component("DataTable", DataTable);
    webApp.component("Column", Column);
    webApp.component("ColumnGroup", ColumnGroup);
    webApp.component("Row", Row);
    webApp.component("Rating", Rating);
    webApp.component("Tag", Tag);
    webApp.component("Tag", Tag);
    webApp.component("Toast", Toast);
    webApp.mount(app);
}
