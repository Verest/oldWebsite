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

//main
mix.babel([
   'resources/assets/main/js/hamburger.js'
], 'public/js/hamburger.js')
   .sass('resources/assets/main/sass/main.scss', 'public/css');

//application projects
//simon
mix.babel([
  'resources/assets/main/js/hamburger.js',
  'resources/assets/projects/simon/js/simon.js'
], 'public/js/simon.js')
  .sass('resources/assets/projects/simon/sass/simon.scss', 'public/css');

//tictactoe
mix.babel([
  'resources/assets/main/js/hamburger.js',
  'resources/assets/projects/tictactoe/js/tictactoe.js'
], 'public/js/tictactoe.js')
   .sass('resources/assets/projects/tictactoe/sass/tictactoe.scss', 'public/css');

//wikipedia-viewer
mix.babel([
  'resources/assets/main/js/hamburger.js',
  'resources/assets/projects/wikipedia-viewer/js/wikipedia-viewer.js'
], 'public/js/wikipedia-viewer.js')
   .sass('resources/assets/projects/wikipedia-viewer/sass/wikipedia-viewer.scss', 'public/css');
