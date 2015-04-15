var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing public/vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass(['back/back-theme.scss',
    	'front/theme-animate.scss',
    	'front/front-theme.scss',
    	'front/theme-elements.scss',
        'front/custom.scss'
    	], 'public/css')
    .copy(
    	'vendor/bower_components/bootstrap/dist/css/bootstrap.min.css',
    	'public/vendor/bootstrap/bootstrap.css'
     )
    .copy(
    	'vendor/bower_components/font-awesome/css/font-awesome.min.css',
    	'public/vendor/fontawesome/css/font-awesome.css'
     )
    .copy(
    	'vendor/bower_components/font-awesome/fonts',
    	'public/vendor/fontawesome/fonts'
     )    
    .copy(
    	'vendor/bower_components/superslides/dist/stylesheets/superslides.css',
    	'public/vendor/superslides/dist/stylesheets/superslides.css'
     )
    .copy(
        'vendor/bower_components/intl-tel-input/build/css/intlTelInput.css',
        'public/vendor/intl-tel-input/intlTelInput.css'
    )
    .copy(
    	'vendor/bower_components/jquery.appear.js/jquery.appear.js',
    	'public/vendor/jquery.appear/jquery.appear.js'
     )
    .copy(
    	'vendor/bower_components/jquery.easing/js/jquery.easing.min.js',
    	'public/vendor/jquery.easing/jquery.easing.js'
     )
    .copy(
    	'vendor/bower_components/jquery-cookie/jquery.cookie.js',
    	'public/vendor/jquery-cookie/jquery-cookie.js'
     )
    .copy(
    	'vendor/bower_components/bootstrap/dist/js/bootstrap.min.js',
    	'public/vendor/bootstrap/bootstrap.js'
     )
    .copy(
    	'vendor/bower_components/common/common.min.js',
    	'public/vendor/common/common.js'
     )
    .copy(
    	'vendor/bower_components/jquery.stellar/jquery.stellar.min.js',
    	'public/vendor/jquery.stellar/jquery.stellar.js'
     )
    .copy(
    	'vendor/bower_components/jquery.gmap/jquery.gmap.custom.js',
    	'public/vendor/jquery.gmap/jquery.gmap.js'
     )
    .copy(
        'vendor/bower_components/superslides/dist/jquery.superslides.min.js',
        'public/vendor/superslides/dist/jquery.superslides.js'
    )
    .copy(
        'vendor/bower_components/intl-tel-input/build/js/intlTelInput.min.js',
        'public/vendor/intl-tel-input/intlTelInput.min.js'
    )
     .copy(
        'vendor/bower_components/intl-tel-input/build/img/',
        'public/vendor/img/'
    )
        .copy(
        'vendor/bower_components/intl-tel-input/lib/',
        'public/vendor//intl-tel-input/lib/'
    )
        .copy(
        'vendor/bower_components/libphonenumberjs/libphonenumber.min.js',
        'public/vendor/libphonenumberjs/libphonenumber.min.js'
    )

    /*Backend - Admin*/
    .copy(
        'vendor/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js',
        'public/vendor/nanoscroller/nanoscroller.js'
        )
    .copy(
        'vendor/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.map',
        'public/vendor/nanoscroller/jquery.nanoscroller.min.map'
        )
    .copy(
        'vendor/bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css',
        'public/vendor/bootstrap-multiselect/bootstrap-multiselect.css'
        )
    .copy(
        'vendor/bower_components/magnific-popup/dist/magnific-popup.css',
        'public/vendor/magnific-popup/magnific-popup.css'
        )
    .copy(
        'vendor/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',
        'public/vendor/magnific-popup/magnific-popup.js'
        )
    .copy(
        'vendor/bower_components/DataTables/media/js/jquery.dataTables.min.js',
        'public/vendor/jquery-datatables/media/js/jquery.dataTables.js'
        )
    .copy(
        'vendor/bower_components/datetimepicker/jquery.datetimepicker.css',
        'public/vendor/datetimepicker/jquery.datetimepicker.css'
        )
    .copy(
        'vendor/bower_components/datetimepicker/jquery.datetimepicker.js',
        'public/vendor/datetimepicker/jquery.datetimepicker.js'
        )
    .copy(
        'vendor/bower_components/gmaps/gmaps.js',
        'public/vendor/gmaps/gmaps.js'
        )
    .copy(
        'vendor/bower_components/jquery/dist/jquery.js',
        'public/vendor/jquery/jquery.js'
        )
    .copy(
        'vendor/bower_components/datatables-bootstrap3/BS3/assets/js/datatables.js',
        'public/vendor/jquery-datatables-bs3/assets/js/datatables.js'
        )
    .copy(
        'vendor/bower_components/superslides/dist/jquery.superslides.js',
        'public/vendor/superslides/dist/jquery.superslides.js'
        )
    /*Concatonete styles*/
    .styles([
        'vendor/superslides/dist/stylesheets/superslides.css',
        'vendor/bootstrap/bootstrap.css',
        'css/front-theme.css',
        'css/theme-elements.css',
        'css/theme-animate.css',
        'vendor/pnotify/pnotify.custom.css',
        'css/skins/default.css',
        'css/custom.css',
        ], '', 'public/css/home.main.css')
    /*Concatonete scripts*/
    .scripts([
        'vendor/modernizr/modernizr.js',
        'vendor/jquery/jquery.js',
        'vendor/jquery.appear/jquery.appear.js',
        'vendor/jquery.easing/jquery.easing.js',
        'vendor/jquery-cookie/jquery-cookie.js',
        'vendor/bootstrap/bootstrap.js',
        'vendor/common/common.js',
        'vendor/jquery.stellar/jquery.stellar.js',
        'vendor/pnotify/pnotify.custom.min.js',
        'vendor/jquery.gmap/jquery.gmap.js',
        'js/home-theme.js',
        'vendor/superslides/dist/jquery.superslides.js',
        'js/home-theme.init.js'
    ], '', 'public/js/home.main.js');
});
