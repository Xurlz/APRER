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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.copy('vendor/twbs/bootstrap/dist/js', 'public/bootstrap/js');
mix.copy('vendor/twbs/bootstrap/dist/css', 'public/bootstrap/css');
mix.copy('vendor/components/jquery/jquery.js', 'public/jquery/jquery.js');

mix.copy('resources/img', 'public/img');

//mix.copy('vendor/twbs/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
//mix.copy('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap.bundle.js');
