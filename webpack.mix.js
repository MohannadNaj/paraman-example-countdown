let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/countdown.js', 'public/js')
   .sass('resources/assets/sass/countdown.scss', 'public/css');

mix.copy('resources/assets/images/countdown','public/images')

mix.js('resources/assets/js/date.js', 'public/js')
    .sass('resources/assets/sass/date.scss','public/css')


