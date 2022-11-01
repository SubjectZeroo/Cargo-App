import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'resources/js/utilities/menu-btn-toggle.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: 8080
    }
});
