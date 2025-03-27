import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Caminho do arquivo CSS simples
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
