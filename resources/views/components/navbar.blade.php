<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="ISIDORE LALYA - Développeur Web" class="logo-image">
            </a>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="navbar-menu" id="navbarMenu">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                </li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">À
                        propos</a></li>
                <li><a href="{{ route('projects') }}"
                        class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projets</a></li>
                <li><a href="{{ route('services') }}"
                        class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('contact') }}"
                        class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>