import { createApp } from "vue";
import FontAwesomeIcon from "./lib/fontAwesome";
import vuetify from "./lib/vuetify";

//PrimeVue
import PrimeVue from "primevue/config";
import DataTable from "primevue/datatable";
import Column from "primevue/column";

//Own
import WebLayout from "./layout/web.vue";

//VueApp
const app = document.querySelector("#web-app");

if (app) {
    const webApp = createApp();

    //Vuetify
    webApp.use(vuetify);

    //PrimeVue
    webApp.use(PrimeVue, { unstyled: true });
    webApp.component("DataTable", DataTable);
    webApp.component("Column", Column);

    //FontAwesome
    webApp.component('FontAwesomeIcon', FontAwesomeIcon);

    //Own
    webApp.component("WebLayout", WebLayout);
    webApp.mount(app);
}
