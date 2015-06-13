				<div class="sidebar-header">
					<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				
				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
							<ul class="nav nav-main">
								<li class="{{set_active('home')}}">
									<a href="{{ action('PagesController@index') }}">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Home</span>
									</a>
								</li>
								<li class="{{set_active('messages')}}">
									<a href="{{ action('PagesController@messages') }}">
										<span class="pull-right label label-primary">182</span>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<span>Messages</span>
									</a>
								</li>
								<li class="nav-parent {{ set_expanded(['schools', 'school/create']) }}">
									<a>
										<i class="fa fa-child" aria-hidden="true"></i>
										<span>Manage schools</span>
									</a>
									<ul class="nav nav-children">
                                        <li class="{{set_active('schools')}}">
											<a href="{{ asset('schools') }}">
												School list
											</a>
										</li>									
										<li class="{{set_active('school/create')}}">
											<a href="{{ asset('school/create') }}">
												Create new school
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent {{ set_expanded(['procedure.create', 'model.index']) }}">
									<a>
										<i class="fa fa-child" aria-hidden="true"></i>
										<span>Model booking</span>
									</a>
									<ul class="nav nav-children">
										<li class="{{set_active('procedure.create')}}">
											<a href="{{ action('PagesController@createProcedure') }}">
												Find new model
											</a>
										</li>
                                        <li class="{{set_active('model.index')}}">
											<a href="{{ action('PagesController@indexModel') }}">
												Model list
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent">
									<a>
										<i class="fa fa-users" aria-hidden="true"></i>
										<span>Students</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="page-add-new-student.html">
												Add new sutudent
											</a>
										</li>											
										<li>
											<a href="tables-advanced.html">
												Students database
											</a>
										</li>
										<li>
											<a href="tables-advanced-archive.html">
												Archive
											</a>
										</li>											
										<li>
											<a href="tables-responsive.html">
												Responsive
											</a>
										</li>
										<li>
											<a href="tables-editable.html">
												Editable
											</a>
										</li>
										<li>
											<a href="tables-ajax.html">
												Ajax
											</a>
										</li>
										<li>
											<a href="tables-pricing.html">
												Pricing
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="pages-calendar.html">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<span>Calendar/Planning</span>
									</a>
								</li>
								<li>
									<a href="ui-elements-charts.html">
										<i class="fa fa-bar-chart-o" aria-hidden="true"></i>
										<span>Analytichs</span>
									</a>
								</li>																			
								<li class="nav-parent">
									<a>
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<span>Maps</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a href="pages-calendar.html">
												Basic
											</a>
										</li>
										<li>
											<a href="maps-google-maps-builder.html">
												Map Builder
											</a>
										</li>
										<li>
											<a href="maps-vector.html">
												Vector
											</a>
										</li>
									</ul>
								</li>
                                <li class="nav-parent {{ set_expanded(['sms', 'sendsinglesms']) }}">
                                    <a>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <span>SMS</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="{{set_active('sms')}}">
                                            <a href="{{ action('SmsController@index') }}">
                                                Send SMS to Youth
                                            </a>
                                        </li>
                                        <li class="{{set_active('sendsinglesms')}}">
                                            <a href="{{ action('SmsController@indexContacts') }}">
                                                <i class="fa fa-circle-o-notch fa-spin"></i>
                                                Send Single SMS
                                            </a>
                                        </li>
                                    </ul>
                                </li>
							</ul>
						</nav>				

					</div>

				</div>
