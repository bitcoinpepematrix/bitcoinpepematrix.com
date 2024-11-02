import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        target: 'esnext'
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/chart.js',
                'resources/js/matrix.js',
                'resources/js/wallet-test.js',
            ],
            refresh: true,
        }),
    ],
});
