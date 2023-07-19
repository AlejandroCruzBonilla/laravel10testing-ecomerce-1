import { createApp } from "vue";
// import { router } from "./router";

//Vuetify Imports
import "@mdi/font/css/materialdesignicons.css";
import "vuetify/styles";
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

//Own
import WebApp from "./layouts/Web.vue";

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
    // webApp.use(PrimeVue, { unstyled: true });
    webApp.use(PrimeVue);
    webApp.component("DataTable", DataTable);
    webApp.component("Column", Column);
    // webApp.component("Row", Row);


    //Own
    webApp.component("WebApp", WebApp);
    webApp.mount(app);
}
