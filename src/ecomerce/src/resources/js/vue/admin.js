import { createApp } from "vue";

//Own
import AdminApp from "./Admin.vue";

//Vuetify Imports
import '@mdi/font/css/materialdesignicons.css'
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

const vuetify = createVuetify({
    components,
    directives,
});

//VueApp
const app = document.querySelector("#admin-app");

if (app) {
    const adminApp = createApp();
    //Vuetify
    adminApp.use(vuetify);
    //Own
    adminApp.component("AdminApp", AdminApp);
    adminApp.mount(app);
}
