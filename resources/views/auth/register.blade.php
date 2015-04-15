@extends('front')

@section('Current-Page-CSS')
    <link rel="stylesheet" href="{{ asset('vendor/intl-tel-input/intlTelInput.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/superslides/dist/stylesheets/superslides.css') }}">
    <style type="text/css">
        .panel-transperent {
            margin-bottom: 50px;
            background-color: rgba(255, 255, 255, 0.3);
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }
        .container {
            width: 100%;
            position: absolute;
            z-index: 2;
            padding: 0px!important;
            top: 30px;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 25px;
            text-align: center;
            color: #fff;
            font-weight: 300;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }


    </style>
@stop

@section('Current-Page-JS')


    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('js/home-theme.js') }}"></script>

    <!-- Specific Page Vendor and Views -->
    <script src="{{ asset('vendor/superslides/dist/jquery.superslides.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('vendor/intl-tel-input/intlTelInput.min.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('js/home-theme.init.js') }}"></script>
    <script>
        // IE10+
        document.getElementsByTagName( "html" )[0].classList.remove( "loading" );

        // All browsers
        document.getElementsByTagName( "html" )[0].className.replace( /loading/, "" );

        // Or with jQuery
        $( "html" ).removeClass( "loading" );

        $('#slides').css('min-height', '490px').superslides({
            hashchange: false,
            play: 6000,
            animation: 'fade',
            pagination: false,
            slide_speed: 10000

        });

        var telInput = $.fn.intlTelInput.getCountryData(),
                errorMsg = $("#error-msg"),
                validMsg = $("#valid-msg"),
                output = $("#output"),
                addressDropdown = $("#address-country"),
                telInput = $("#phone");


        // initialise plugin
        telInput.intlTelInput({
            defaultCountry: "auto",
            autoFormat: false,
            nationalMode: false,
            autoHideDialCode: false,
            autoPlaceholder: false,
            preferredCountries: ["lv", "ee", "lt"],
            onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
                "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
                "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
                "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
            utilsScript: "{{ asset('vendor/intl-tel-input/lib/libphonenumber/build/utils.js') }}"
        });

    </script>
    <!-- Theme Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>
@stop

@section('content')

    <body>
    <div class="container">


        {!! Form::open(['route' => 'register_path', 'class' => 'form-signin panel panel-transperent']) !!}
        <h2 class="form-signin-heading">Registration form</h2>
        @include('partials.errors')
        <div class="form-group">
            <div class="">
                <div class="input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class="fa fa-user"></i></span>
									</span>
                    {!! Form::text('user_firstname', null, array('placeholder'=>'First name', 'class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <div class="input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class="fa fa-font"></i></span>
									</span>
                    {!! Form::text('user_lastname', null, array('placeholder'=>'Last name', 'class' => 'form-control')) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <div class="input-group-icon">
									<span class="input-group-addon">
										<span class="icon"><i class="fa fa-envelope"></i></span>
									</span>
                    {!! Form::text('email', null, array('placeholder'=>'E-mail', 'class' => 'form-control')) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <div class="input-group-icon">
									<span class="input-group-addon">
									</span>
                    {!! Form::text('user_phone', null,  array('id' => 'phone', 'class' => 'form-control')) !!}

                    <span id="valid-msg" class="hide">✓ Valid</span>
                    <span id="error-msg" class="hide">Invalid number</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <div class="input-group-icon">
                    {!! Form::hidden('password', null,  array('class' => 'form-control')) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Sign Up', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>


    <div class="slider-container slider-container-fullscreen" id="slides">
        <div class="slides-overlay"></div>
        <div class="slides-container">
            <img src="{{ asset('img/slides/1.jpg') }}">
            <img src="{{ asset('img/slides/2.jpg') }}">
            <img src="{{ asset('img/slides/3.jpg') }}">
            <img src="{{ asset('img/slides/4.jpg') }}">
        </div>
    </div>

@stop