<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | About</title>
    @include('partials.typography')
</head>
<body class="bg-light">
    <header>
        <nav class="site-nav unicolor" aria-label="Primary navigation">
            <a class="nav-link-custom" href="{{ route('home') }}">Home</a>
            <a class="nav-link-custom" href="{{ route('projects') }}">Projects</a>
            <a class="nav-link-custom" href="{{ route('about') }}">About</a>
        </nav>
    </header>
    <main class="main-content">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6 px-4">
                    <h1 class="section-title">About Me</h1>
                    <p class="about-copy">I’m a student learning computer technology and web development. I aim to use technical expertise and coding to help my community.</p>
                    <h2 class="subsection-title">My Goals</h2>
                    <ul class="goals-list ps-4">
                        <li>Build a system that my school and community can use.</li>
                        <li>Become proficient in at least one programming language I have learned.</li>
                        <li>Learn more about computer knowledge, including networking, operating systems, and databases.</li>
                        <li>Make my own game.</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=facearea&w=400&h=400&facepad=2"
                         alt="Profile"
                         class="img-fluid rounded shadow-lg"
                         style="max-width: 80%;">
                </div>
            </div>
        </div>
    </main>
</body>
</html>
