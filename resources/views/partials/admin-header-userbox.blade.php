				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="http://www.avatarpro.biz/avatar/{{ Auth::user()->present()->fullName }}?s=35" class="img-circle" data-lock-picture="111 'avatar' !!}" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">{{ Auth::user()->present()->fullName }}</span>
							<span class="role">administrator</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="{{ Auth::user()->user_slug }}"><i class="fa fa-user"></i> My Profile</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="/auth/logout"><i class="fa fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>