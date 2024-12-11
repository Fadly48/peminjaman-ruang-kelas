const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .css('resources/css/app.css', 'public/css') // Jika Anda menggunakan file CSS
   .version(); // Opsional: untuk cache busting
