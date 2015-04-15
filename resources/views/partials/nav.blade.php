<header id="header" class="flat-menu clean-top">
    <div class="container">
        <h1 class="logo">
            <a href="/">
                <img alt="Modelbook" width="111" height="54" data-sticky-width="82" data-sticky-height="40" src="img/brand/logo.png">
            </a>
        </h1>

        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="navbar-collapse nav-main-collapse collapse ">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="active">
                        <a data-hash href="/">Home</a>
                    </li>
                    <li>
                        <a data-hash href="#features">Features</a>
                    </li>
                    <li>
                        link_to_route('users_path', 'Browse Users') 
                    </li>
                    
                    <li>
                        <a data-hash href="#contact">Contact Us</a>
                    </li>
                    <li class="signIn">
                    <a href="{{ url('/auth/register') }}"><i class="fa fa-user"></i> Sign up</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
