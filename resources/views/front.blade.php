<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic -->
	<meta charset="utf-8">
	<title>gomodel.es - Home</title>		
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="gomodel.es - book your free beauty apointment">
	<meta name="author" content="gomodel.es">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.css') }}">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('css/front-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ asset('css/theme-animate.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/pnotify/pnotify.custom.css') }}" />
	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{ asset('css/skins/default.css') }}">
	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<!-- Head Libs -->
	<script src="{{ asset('vendor/modernizr/modernizr.js') }}"></script>
	<!-- Current Page CSS -->

	@yield('Current-Page-CSS')

	<!--[if IE]>
	<link rel="stylesheet" href="{{ asset('css/ie.css') }}">
	<![endif]-->

	<!--[if lte IE 8]>
	<script src="{{ asset('vendor/respond/respond.js') }}"></script>
	<script src="{{ asset('vendor/excanvas/excanvas.js') }}"></script>
	<![endif]-->
</head>

@yield('content')
<!-- Vendor -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
@yield( 'Current-Page-jQuerry' )
<script src="{{ asset('vendor/pnotify/pnotify.custom.min.js') }}"></script>
@yield('Current-Page-JS')
@if (Session::has('flash_notification.message'))
<script type="text/javascript">
	$(function(){
		PNotify.desktop.permission();
		new PNotify({
			title: 'Info!',
			text: '{{ Session::get('flash_notification.message') }}',
			type: '{{ Session::get('flash_notification.level') }}',
			icon: 'fa fa-info',
			nonblock: {
				nonblock: true,
				nonblock_opacity: .2
			},
			desktop: {
				desktop: true
			}
		});
	});
</script>
@endif
</body>
</html>