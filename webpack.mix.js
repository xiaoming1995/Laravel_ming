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
mix.webpackConfig({
  resolve: {
    extensions: ['.js', '.vue', '.json'],
    // alias: {
    //   'components': 'assets/js/components',
    //   'api': 'assets/js/api',
    //   'common': 'assets/js/common'
    // },
    modules: [
      'node_modules',
      path.resolve(__dirname, "resources")
    ]
  },
})



mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
