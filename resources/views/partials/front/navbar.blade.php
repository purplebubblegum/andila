<nav class="navbar navbar-default navbar-static-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('web.default') }}">
                Andila
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @unless(Request::is('home'))
                <li><a href="{{ route('web.home') }}">Beranda</a></li>
                @endunless
                
                @unless(Request::is('about'))
                <li><a href="{{ route('web.about') }}">Tentang</a></li>
                @endunless
                
                @unless(Request::is('docs/index'))
                <li><a href="{{ route('web.docs.index') }}">Panduan</a></li>
                @endunless
            </ul>
        </div>
    </div>
</nav>