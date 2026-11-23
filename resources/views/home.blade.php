<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Home</title>
    @include('partials.typography')
</head>
<body class="bg-light text-center">
    <header>
        <nav class="site-nav unicolor" aria-label="Primary navigation">
            <a class="nav-link-custom" href="{{ route('home') }}">Home</a>
            <a class="nav-link-custom" href="{{ route('projects') }}">Projects</a>
            <a class="nav-link-custom" href="{{ route('about') }}">About</a>
        </nav>
    </header>
    <main class="home-content container">
        <h1 class="page-title">Hi, I’m Karl Ashton Mahusay</h1>
        <p class="intro-text mb-0">An Associate of Computer Technology student</p>
        <p class="supporting-text text-muted mb-0">at La Verdad Christian College.</p>
    </main>
</body>
</html>
