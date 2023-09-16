const mix = require('laravel-mix');

mix.setResourceRoot('');
mix.options({
    processCssUrls: false
});

mix.copyDirectory('resources/assets/img', 'public/assets/img');
mix.copyDirectory('resources/assets/vendor/fontawesome-free/webfonts', 'public/assets/webfonts');
mix.copyDirectory('resources/assets/vendor/kk/fonts', 'public/assets/webfonts');
mix.copyDirectory('resources/assets/device-mockups/img', 'public/assets/img/device');

mix.styles(
    [
        'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
        'resources/assets/vendor/fontawesome-free/css/all.min.css',
        'resources/assets/vendor/kk/style.css',
        'resources/assets/vendor/simple-line-icons/css/simple-line-icons.cs',
        'resources/assets/device-mockups/device-mockups.css',
        'resources/assets/css/new-age.css',
    ]
    , 'public/assets/css/app.css');

mix.scripts(
    [
        'resources/assets/vendor/jquery/jquery.min.js',
        'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'resources/assets/vendor/jquery-easing/jquery.easing.min.js',
        'resources/assets/js/new-age.js',
    ]
    , 'public/assets/js/app.js');


if (mix.inProduction()) {
    console.log("We are in production");
    mix.version(['public/assets/js/app.js', 'public/assets/css/app.css']);
}
