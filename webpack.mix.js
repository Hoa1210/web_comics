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

mix.copy('resources/js/admin/main.js', 'public/js/admin')

mix.copy('resources/js/app.min.js', 'public/js')
mix.copy('resources/js/vendor.min.js', 'public/js')

mix.copy('resources/js/vendor/dataTables.bootstrap5.js', 'public/js/vendor')
mix.copy('resources/js/vendor/jquery.dataTables.min.js', 'public/js/vendor')
//css
mix.copy('resources/css/app.min.css', 'public/css')
mix.copy('resources/css/icons.min.css', 'public/css')

mix.copy('resources/css/admin/main.css', 'public/css/admin')

mix.copy('resources/css/vendor/dataTables.bootstrap5.css', 'public/css/vendor')



//images
mix.copy('resources/images', 'public/images')