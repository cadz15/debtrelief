import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css",
                "resources/css/app.css",
                "resources/css/datatable.buttons.css",
                "resources/css/datatables.css",
                "resources/css/fontawesome-all.css",
                "resources/css/magnific-popup.css",
                "resources/css/styles.css",
                "resources/css/swiper.css",
                "resources/js/admin.js",
                "resources/js/app.js",
                "resources/js/bootstrap.js",
                "resources/js/datatables.min.js",
                "resources/js/jquery.easing.min.js",
                "resources/js/jquery.magnific-popup.js",
                "resources/js/jquery.min.js",
                "resources/js/scripts.js",
                "resources/js/swiper.min.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
