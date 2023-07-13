import { createApp } from "vue";
import { router } from "./router";

//Own
import WebApp from "./Web.vue";

//Vuetify Imports
import '@mdi/font/css/materialdesignicons.css'
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

//PrimeVue
import PrimeVue from "primevue/config";
import Button from "primevue/button";
import Menu from "primevue/menu";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import ColumnGroup from "primevue/columngroup"; // optional
import Row from "primevue/row";
import Rating from "primevue/rating";
import Tag from "primevue/tag";
import Toast from "primevue/toast";
// import "primevue/resources/themes/lara-light-blue/theme.css";

//Vuetify Imports
const vuetify = createVuetify({
    components,
    directives,
});

//VueApp
const app = document.querySelector("#web-app");

if (app) {
    const webApp = createApp();

    //Services
    // webApp.use(router);

    //Vuetify
    webApp.use(vuetify);
    //PrimeVue
    // webApp.use(PrimeVue, { ripple: true ,unstyled: true});
    webApp.use(PrimeVue, { unstyled: true });
    //Own
    webApp.component("WebApp", WebApp);

    //PrimeVue
    webApp.component("Button", Button);
    webApp.component("Menu", Menu);
    webApp.component("DataTable", DataTable);
    webApp.component("Column", Column);
    webApp.component("ColumnGroup", ColumnGroup);
    webApp.component("Row", Row);
    webApp.component("Rating", Rating);
    webApp.component("Tag", Tag);
    webApp.component("Toast", Toast);

    //
    webApp.mount(app);
}
