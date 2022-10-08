const mix = require("laravel-mix");

mix.browserSync({
    proxy: "http://theo.test",
});

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
