import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

import { createRequire } from 'node:module';
const require = createRequire( import.meta.url );
import ckeditor5 from "@ckeditor/vite-plugin-ckeditor5";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/index.css", "resources/js/index.js"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
                compilerOptions: {
                    // isCustomElement: (tag) => tag.startsWith('v-'),
                },
            },
        }),
        ckeditor5({
            theme: require.resolve("@ckeditor/ckeditor5-theme-lark"),
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
            // '@~': fileURLToPath( new URL( './src', import.meta.url ) )
        },
   
    },
});
