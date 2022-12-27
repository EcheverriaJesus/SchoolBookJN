import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resource/css/main.scss',
            'resources/css/app.css',
            'resources/js/app.js'],
        ),
    ],
});
