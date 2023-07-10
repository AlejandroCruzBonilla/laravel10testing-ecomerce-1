import './bootstrap';
import { createApp } from "vue";
import HelloWorld from "./components/HelloWorld.vue";
import ExampleComponent from "./components/ExampleComponent.vue";

const app = createApp({
    components: {
        HelloWorld,
        ExampleComponent
    },
});

app.mount("#app");