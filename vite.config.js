import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import inject from '@rollup/plugin-inject';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        inject({
            $: 'jquery',
        }),
    ],
    resolve: {
        alias: {
            'foundation': path.resolve(__dirname, 'node_modules/foundation-sites'),
            'motion-ui': path.resolve(__dirname, 'node_modules/motion-ui/src'),
        }
    },
    server: {
        hmr: {
            host: 'localhost',
        },
    },
});
