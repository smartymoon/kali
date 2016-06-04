var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    var Bower = './bower_components/';
    mix.sass('app.scss');
    mix.scripts([
        'jquery/dist/jquery.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
    ],'public/js/jquery_and_boot.min.js',Bower);
    mix.scripts(['jquery_center.js']);
    //mix.styles(['bootstrap/dist/css/bootstrap.min.css'],'public/css/boot.css',Bower);
});
