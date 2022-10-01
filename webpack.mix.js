const mix = require('laravel-mix');




mix.setPublicPath("asset");
mix.js('resources/js/app.js', 'js')
    .postCss('resources/css/app.css', 'css', [
        require("tailwindcss"),
        require("autoprefixer"),
    ]);