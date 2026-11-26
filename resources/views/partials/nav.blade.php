<header>
    <nav class="site-nav unicolor" aria-label="Primary navigation">
        <a class="nav-link-custom" href="{{ route('home') }}"@if (request()->routeIs('home')) aria-current="page"@endif>Home</a>
        <a class="nav-link-custom" href="{{ route('about') }}"@if (request()->routeIs('about')) aria-current="page"@endif>About</a>
        <a class="nav-link-custom" href="{{ route('projects') }}"@if (request()->routeIs('projects')) aria-current="page"@endif>Projects</a>
    </nav>
</header>
