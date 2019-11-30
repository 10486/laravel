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

mix.js('resources/js/app.js', 'public/js/app.js')
   .js('resources/js/script.js', 'public/js/app.js')
   .js('resources/js/custom.js', 'public/js/app.js')
   .sass('resources/sass/_variables.scss', 'public/css/app.css')
   .styles(['resources/sass/style.css','resources/sass/icomoon.css'], 'public/css/app.css')
   .sass('resources/sass/app.scss', 'public/css/app.css')
   .sass('resources/sass/style.sass', 'public/css/app.css')
   .sass('resources/sass/style.scss', 'public/css/app.css')
   .sass('resources/sass/styles.scss', 'public/css/app.css');


  // mix.js('resources/js/app.js', 'public/js')
  //    .js('resources/js/script.js', 'public/js')
  //    .js('resources/js/custom.js', 'public/js')
  //    .sass('resources/sass/app.scss', 'public/css')
  //    .sass('resources/sass/_variables.scss', 'public/css')
  //    .styles(['resources/sass/style.css','resources/sass/icomoon.css'], 'public/css')
  //    .sass('resources/sass/style.sass', 'public/css')
  //    .sass('resources/sass/style.scss', 'public/css')
  //    .sass('resources/sass/styles.scss', 'public/css');
