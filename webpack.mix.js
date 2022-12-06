const mix = require("laravel-mix");
const path = require("path");

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

/*
mix.babelConfig({
    plugins: ["@babel/plugin-syntax-dynamic-import"],
});*/

mix.webpackConfig({
    resolve: {
        modules: [path.resolve(__dirname, "node_modules")],
    },
})
    .options({
        processCssUrls: false,
    })
    .js("resources/js/index.js", "public/js")
    .sourceMaps(false, "source-map")
    .sass("resources/scss/index.scss", "public/css");
