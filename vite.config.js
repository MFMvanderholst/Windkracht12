import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/main.scss',
                'resources/scss/tab.scss',
                'resources/css/modal.css',
                'resources/js/app.js',
                'resources/js/modal.js',
                'resources/js/tab.js'
            ],
            refresh: true,
        }),
    ],
});
