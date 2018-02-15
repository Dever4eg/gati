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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',

    'node_modules/smartmenus/src/addons/bootstrap/jquery.smartmenus.bootstrap.css',

    'resources/assets/css/main.css'
], 'public/assets/css/app.css');

mix.scripts([
    'node_modules/jquery/dist/jquery.min.js',

    'node_modules/smartmenus/src/jquery.smartmenus.js',
    'node_modules/smartmenus/src/addons/bootstrap/jquery.smartmenus.bootstrap.js',

    'node_modules/bootstrap/dist/js/bootstrap.min.js'
], 'public/assets/js/app.js');

mix.copy('node_modules/bootstrap/dist/fonts', 'public/assets/fonts');