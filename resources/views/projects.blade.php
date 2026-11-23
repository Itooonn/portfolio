<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Projects</title>
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
    <main class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="section-title">My Work</h1>
                    <p class="intro-text text-muted mb-5">Selected projects completed during my time as a student at La Verdad Christian College.</p>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <article class="card project-card p-4 h-100 text-start">
                                <h2 class="project-title">Visit Colleges</h2>
                                <p class="project-copy">A web app that helps upcoming college students find and explore nearby colleges in Apalit, Pampanga.</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="card project-card p-4 h-100 text-start">
                                <h2 class="project-title">Reserba Silid</h2>
                                <p class="project-copy">A web app that helps La Verdad Christian College students view class schedules and reserve classrooms for events.</p>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="card project-card p-4 h-100 text-start">
                                <h2 class="project-title">Hunter Exam Python Game</h2>
                                <p class="project-copy">A simple text-based interactive game that places the player among the examinees in the Hunter × Hunter anime.</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
