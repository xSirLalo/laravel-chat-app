import laravel from 'laravel-vite-plugin';
import Inspect from 'vite-plugin-inspect';
import path from 'path';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        Inspect(),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            '~bootstrap-icons': path.resolve(__dirname, 'node_modules/bootstrap-icons'),
            '$': 'jQuery',
        },
    },
    optimizeDeps: {
        include: ['jquery'],
        esbuildOptions: {
            sourcemap: false,
        }
    },
    build: {
        sourcemap: false,
        chunkSizeWarningLimit: 700,
    },
});
