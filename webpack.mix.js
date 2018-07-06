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

mix.browserSync('127.0.0.1:8000')

mix.webpackConfig({
module: {
  rules: [{
    test: /\.(png|jpe?g|gif)$/,
    loader: 'file-loader',
    options: {
        name: 'images/[name].[hash].[ext]',
        publicPath: '/'
    }
  }]
}
})

mix.js('resources/assets/js/app.js', 'public/js');
mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/layout-default.scss', 'public/css');
mix.sass('resources/assets/sass/page-welcome.scss', 'public/css');
