import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/access.css',
                'resources/css/dashboard.css', 
            ],
            refresh: true,
        }),
    ],
});
