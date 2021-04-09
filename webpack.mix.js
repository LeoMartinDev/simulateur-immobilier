const mix = require('laravel-mix');
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// Simulator
mix.js('resources/js/simulator/simulator.js', 'public/js');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.vue();

mix.extract();

mix.browserSync('localhost');

mix.webpackConfig({
    plugins: [
        new VuetifyLoaderPlugin(),
    ],
});

if (mix.inProduction()) {
    mix.version();
}
