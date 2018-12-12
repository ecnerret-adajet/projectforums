const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix
.styles([
    'resources/sass/app.scss',
    'resources/css/argon.css',
    'resources/vendor/@fortawesome/fontawesome-free/css/all.min.css',
    'resources/vendor/nucleo/css/nucleo.css',
], 'public/css/all.css')
.js([
    // 'resources/js/app.js',
    'resources/vendor/headroom/headroom.min.js',
    'resources/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
    'resources/js/argon.js',
], 'public/js/all.js')
.browserSync('http://airline.local');
