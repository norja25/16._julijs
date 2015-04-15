@extends('front')

@section('Current-Page-CSS')
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
<!-- Theme Initialization Files -->
<script src="{{ asset('js/home-theme.init.js') }}"></script>

			<!-- Theme Custom -->
			<script src="{{ asset('js/custom.js') }}"></script>
			@stop

			@section('content')

			<body style="margin: 0px;background: black;">


                                    <section class="register-panel centering row-fluid col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-7 col-sm-offset-3 col-sm-6">
                                        <div class="panel-body ">
                                            <div class="row">

                                                @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <form class="form" role="form" method="POST" action="{{ url('/auth/login') }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <div class="">
                                                            <div class="input-group-icon">
				                                    <span class="input-group-addon">
				                                        <span class="icon"><i class="fa fa-phone"></i></span>
				                                    </span>
                                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="">
                                                            <div class="input-group-icon">
				                                    <span class="input-group-addon">
				                                        <span class="icon"><i class="fa fa-key"></i></span>
				                                    </span>
                                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Login</button> <br>
                                                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
                                                </form>

                                            </div>
                                        </div>
                                    </section>




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




