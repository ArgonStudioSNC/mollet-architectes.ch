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

mix
    .autoload({
        'jquery': [
            '$', 'window.$', 'jQuery', 'window.jQuery'
        ]
    })

    .sass('resources/sass/app.scss', 'css')

    .js('resources/js/app.js', 'js')

    .extract(['jquery'])

    .browserSync({
        proxy: 'lvh.me:8000'
    });

//Foundation Site 6 is not ES5 ready
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.jsx?$/,
                exclude: /node_modules(?!\/foundation-sites)|bower_components/,
                use: [
                    {
                        loader: 'babel-loader',
                        options: Config.babel()
                    }
                ]
            }
        ]
    }
});

if (mix.inProduction()) {
    mix.version();
}
