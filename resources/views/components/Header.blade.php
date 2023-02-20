<header>
    <div class="osnova-header">
        <h1><a href="#">Library</a></h1>
        <nav class="menu-navigation">
            <ul>
                <li class="li-menu-navigation"><a href="#">About_us</a></li>
                <li class="li-menu-navigation"><a href="#">Contacts</a></li>
            </ul>
        </nav>
        <div class="header-buttons">
            @auth
                <a href="{{route('logout')}}" class="registration-button">Log out</a>
            @endauth
            @guest
                <a href="{{route('page.register')}}" class="registration-button">Registration</a>
                <a href="{{route('page.auth')}}" class="auth-button">Sign in</a>
                @endguest
        </div>
    </div>
</header>

