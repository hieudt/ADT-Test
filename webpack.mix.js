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



mix.styles([
    'public/theme/vendor/fontawesome-free/css/all.css',
    'public/theme/css/sb-admin-2.css',
    'public/theme/vendor/jquery/jquery-ui.css',
    'public/theme/vendor/jquery/jquery-ui.theme.css',
    'public/theme/vendor/jquery/jquery-ui.structure.css',
    'public/css/toastr.css',
], 'public/assets/backend/app.css');

mix.scripts([
    'public/theme/vendor/jquery/jquery.min.js',
    'public/theme/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'public/theme/vendor/jquery-easing/jquery.easing.min.js',
    'public/theme/js/sb-admin-2.min.js',
    'public/theme/vendor/jquery/jquery-ui.min.js',
    'public/js/toastr.min.js',
], 'public/assets/backend/core.js');
