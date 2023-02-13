const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/app.min.js', 'public/js/admin')
    .js('resources/js/admin/vendor.min.js', 'public/js/admin');

mix.copy('resources/js/admin/main.js', 'public/js/admin')
//css
mix.copy('resources/css/app.min.css', 'public/css')
mix.copy('resources/css/icons.min.css', 'public/css')

mix.copy('resources/css/admin/main.css', 'public/css/admin')



//images
mix.copy('resources/images', 'public/images')