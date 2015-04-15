@extends('front')

@section('Current-Page-CSS')
	<link rel="stylesheet" href="vendor/superslides/dist/stylesheets/superslides.css">
@stop

@section( 'Current-Page-jQuerry' )
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="vendor/bootstrap/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
@stop

@section('Current-Page-JS')
	<script src="vendor/jquery.gmap/jquery.gmap.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/home-theme.js"></script>

	<!-- Specific Page Vendor and Views -->
	<script src="vendor/superslides/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
	<!-- Theme Initialization Files -->
	<script src="js/home-theme.init.js"></script>

	<script src="http://maps.google.com/maps/api/js"></script>
	<script>
					// Map Markers
					var mapMarkers = [{
						address: "Lāčplēša iela 41, Rīga",
						html: "<strong>Rīgas Ofiss</strong><br>Lāčplēša iela 41, LV1011<br><a href='#' onclick='mapCenterAt({latitude: 56.95298, longitude: 24.12815, zoom: 14}, event)'>[+] zoom here</a>",
						icon: {
							image: "img/pin.png",
							iconsize: [26, 46],
							iconanchor: [12, 46]
						}
					}];

					// Map Initial Location
					var initLatitude = 56.95298;
					var initLongitude = 24.12815;

					// Map Extended Settings
					var mapSettings = {
						controls: {
							panControl: true,
							zoomControl: true,
							mapTypeControl: true,
							scaleControl: true,
							streetViewControl: true,
							overviewMapControl: true
						},
						scrollwheel: false,
						markers: mapMarkers,
						latitude: initLatitude,
						longitude: initLongitude,
						zoom: 7
					};

					var map = $("#googlemaps").gMap(mapSettings);

					// Map Center At
					var mapCenterAt = function(options, e) {
						e.preventDefault();
						$("#googlemaps").gMap("centerAt", options);
					}
	</script>
@stop


@section('content')
<body class="one-page" data-target=".single-menu" data-spy="scroll" data-offset="200">
	<div class="body">
		<div role="main" class="main" id="home">
			@include('partials.nav')
				<section>
					<div class="container-fluid">
				    <div class="row-fluid col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-7 col-sm-offset-3 col-sm-6">
				        <section class="register-panel centering">
				            <div class="panel-body ">
				                <div class="row">

				             	<form class="form-inline" role="form" method="POST" action="{{ url('/auth/login') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
				                        <div class="form-group">
				                            <div class="">
				                                <div class="input-group-icon">
				                                    <span class="input-group-addon">
				                                        <span class="icon"><i class="fa fa-phone"></i></span>
				                                    </span>
				                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
				                                    
				                                </div>
				                            </div>
				                        </div>
				                        <div class="form-group">                                                
				                            <div class="">
				                                <div class="input-group-icon">
				                                    <span class="input-group-addon">
				                                        <span class="icon"><i class="fa fa-key"></i></span>
				                                    </span>
				                                    <input type="password" class="form-control" name="password">				                                  
				                                </div>
				                            </div>
				                        </div>
				                        <button type="submit" class="btn btn-primary">Login</button>
				                    <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
				                     </form>

					                </div>
					            </div>
					        </section>
					    </div>
					</div>
				</section>
				<div class="slider-container slider-container-fullscreen" id="slides">
							<div class="slides-overlay"></div>
							<div class="slides-container">
								<img class="opaci" src="img/slides/slide-bg-full.jpg" >
								<img src="img/slides/slide-bg-full-3.jpg">
							</div>
				</div>
			<section class="parallax top" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax.jpg);">
				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<i class="fa fa-comments icon-featured" data-appear-animation="bounceIn"></i>
							<h1 class="short text-shadow big white bold"><strong>We're excited about gomodel.es</strong></h1>
							<h3 class="lead white">5,500 customers in 100 countries use gomodel.es. Meet our customers.</h3>
						</div>
					</div>
				</div>
			</section>
				<div class="container">

							<div class="row center">
								<div class="col-md-12">
									<h2 class="short word-rotator-title">
										gomodel.es is
										<strong class="inverted" data-appear-animation="bounceIn">
											<span class="word-rotate" data-plugin-options='{"delay": 1000}'>
												<span class="word-rotate-items">
													<span>incredibly</span>
													<span>especially</span>
													<span>extremely</span>
												</span>
											</span>
										</strong>
										beautiful and fully responsive.</h2>
										<p class="featured lead">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.
										</p>
									</div>
								</div>

								<hr class="tall" />
							</div>

							<div class="container">
								<div class="row" id="features">
									<div class="col-md-8">
										<h2 data-appear-animation="fadeInLeft">Our <strong>Features</strong></h2>
										<div class="row">
											<div class="col-sm-6">
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-group"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Customer Support</h4>
														<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-file"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">HTML5 / CSS3 / JS</h4>
														<p class="tall">Lorem ipsum dolor sit amet, adip.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-google-plus"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">500+ Google Fonts</h4>
														<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-adjust"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Colors</h4>
														<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-film"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Sliders</h4>
														<p class="tall">Lorem ipsum dolor sit amet, consectetur.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-user"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Icons</h4>
														<p class="tall">Lorem ipsum dolor sit amet, consectetur adip.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-bars"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Buttons</h4>
														<p class="tall">Lorem ipsum dolor sit, consectetur adip.</p>
													</div>
												</div>
												<div class="feature-box">
													<div class="feature-box-icon">
														<i class="fa fa-desktop"></i>
													</div>
													<div class="feature-box-info">
														<h4 class="shorter">Lightbox</h4>
														<p class="tall">Lorem sit amet, consectetur adip.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<h2 data-appear-animation="fadeInRight">and more...</h2>

										<div class="panel-group" id="accordion">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
															<i class="fa fa-usd"></i>
															Pricing Tables
														</a>
													</h4>
												</div>
												<div id="collapseOne" class="accordion-body collapse in">
													<div class="panel-body">
														Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
															<i class="fa fa-comment"></i>
															Contact Forms
														</a>
													</h4>
												</div>
												<div id="collapseTwo" class="accordion-body collapse">
													<div class="panel-body">
														Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
															<i class="fa fa-laptop"></i>
															Portfolio Pages
														</a>
													</h4>
												</div>
												<div id="collapseThree" class="accordion-body collapse">
													<div class="panel-body">
														Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>

							<section class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-transparent.jpg);">
								<div class="container">
									<div class="row center">
										<div class="col-md-12">
											<i class="fa fa-envelope icon-featured" data-appear-animation="bounceIn"></i>
											<h1 class="short text-shadow big bold" data-appear-animation="fadeInUp"><strong>Get in Touch With Us</strong></h1>
										</div>
									</div>
								</div>
							</section>

							<!-- Google Maps -->
							<div id="googlemaps" class="google-map push-top"></div>

							<div class="container">

								<div class="row" id="contact">
									<div class="col-md-6">

										<div class="alert alert-success hidden" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="alert alert-danger hidden" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
										</div>

										<h2 class="short"><strong>Contact</strong> Us</h2>
										<form id="contactForm" action="php/contact-form.php" method="POST">
											<div class="row">
												<div class="form-group">
													<div class="col-md-6">
														<label>Your name *</label>
														<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
													</div>
													<div class="col-md-6">
														<label>Your email address *</label>
														<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Subject</label>
														<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group">
													<div class="col-md-12">
														<label>Message *</label>
														<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
												</div>
											</div>
										</form>
									</div>
									<div class="col-md-6">

										<h4 class="push-top">Get in <strong>touch</strong></h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>

										<hr />

										<h4>The <strong>Office</strong></h4>
										<ul class="list-unstyled">
											<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
											<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-7890</li>
											<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
										</ul>

										<hr />

										<h4>Business <strong>Hours</strong></h4>
										<ul class="list-unstyled">
											<li><i class="fa fa-time"></i> Monday - Friday 9am to 5pm</li>
											<li><i class="fa fa-time"></i> Saturday - 9am to 2pm</li>
											<li><i class="fa fa-time"></i> Sunday - Closed</li>
										</ul>

									</div>

								</div>

							</div>
				</div>
			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
										<div class="col-md-8">
											<h4>About gomodel.es</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos...</p>
											<hr class="light">
										</div>
										<div class="col-md-3 col-md-offset-1">
											<h5 class="short">Contact Us</h5>
											<span class="phone">(800) 123-4567</span>
											<p class="short">International: (333) 456-6670</p>
											<p class="short">Fax: (222) 531-8999</p>
											<ul class="list icons list-unstyled">
												<li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">okler@okler.net</a></li>
											</ul>
											<div class="social-icons">
												<ul class="social-icons">
													<li class="facebook"><a href="http://www.facebook.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Facebook">Facebook</a></li>
													<li class="twitter"><a href="http://www.twitter.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Twitter">Twitter</a></li>
													<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" data-placement="bottom" rel="tooltip" title="Linkedin">Linkedin</a></li>
												</ul>
											</div>
										</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="gomodel.es Website Template" class="img-responsive" src="img/brand/logo.png">
								</a>
							</div>
							<div class="col-md-11">
								<p>© Copyright 2014. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

@stop
