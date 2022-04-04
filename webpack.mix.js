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

<<<<<<< HEAD
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
=======
mix.autoload({
    jquery: ['$', 'window.jQuery',"jQuery","window.$","jquery","window.jquery"]
});

mix.combine(['resources/assets/js/*.js', 'resources/assets/js/*.map'], 'public/js/app.js')
    .combine('resources/assets/css/*.css', 'public/css/app.css')
>>>>>>> d01be7bd6af2722bc4bd99f35181ff8ce2ab2b6c
    .sourceMaps();
