let mix = require('laravel-mix');
mix
    .scss('resources/css/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js');