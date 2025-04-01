const tailwindcss = require("tailwindcss");
const mix = require("laravel-mix");

require("laravel-mix-artisan-serve");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css", {}, [require("tailwindcss")])
    .serve({
        host: "0.0.0.0",
        port: 8000,
    });
