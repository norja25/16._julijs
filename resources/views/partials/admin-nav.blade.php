<header id="header" class="single-menu flat-menu">
    <div class="container">
        <h1 class="logo">
            <a href="{{ Auth::check() ? route('statuses_path') : route('home') }}"><img alt="gomodel.es" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="front/img/logo.png">
            </a>
        </h1>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="icon icon-bars"></i>
            </button>
    </div>
        <div class="navbar-collapse nav-main-collapse collapse">
            <div class="container">
                <nav class="nav-main mega-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                        <li>
                            <a data-hash href="http://modelbook.app:8000/">Home</a>
                        </li>
                       
                        <li>
                            {{ link_to_route('users_path', 'Browse Users') }}
                        </li>

                @if( $currentUser ) 
                                <li class="dropdown mega-menu-item mega-menu-signin signin logged" id="headerAccount">
                                    <a class="dropdown-toggle" href="page-login.html">
                                       <i class="icon icon-user"></i>
                        {{ $currentUser->username }} <i class="icon icon-angle-down"></i>
                                    </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="user-avatar">
                                                    <div class="img-thumbnail">
                                                        <img src="{{ $currentUser->present()->gravatar }}" alt="{{ $currentUser->username }}">
                                                    </div>
                                                        <p><strong>{{ $currentUser->username }}</strong><span>CEO &amp; Founder - gomodel.es</span></p>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <ul class="list-account-options">
                                                    <li>{{ link_to_route('profile_path', 'Your Profile', $currentUser->username) }}</li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li>{{ link_to_route('logout_path', 'Log Out') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li>{{ link_to_route('register_path', 'Register') }}</li>
                                <li>{{ link_to_route('login_path', 'Log In') }}</li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>