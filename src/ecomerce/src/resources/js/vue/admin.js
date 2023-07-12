import { createApp } from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import ExampleComponent from "./components/ExampleComponent.vue";

const app = document.querySelector("#admin-app");

if (app) {
    const adminApp = createApp({
        components: {
            HelloWorld,
            ExampleComponent,
        },
    });

    adminApp.mount(app);
}
