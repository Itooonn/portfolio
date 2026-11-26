<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Projects</title>
    @include('partials.typography')
</head>
<body class="bg-light" style="overflow: hidden;">
    @include('partials.nav')
    <main class="content-wrapper page-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="section-title">Projects</h1>
                    <p class="intro-text">Three projects I built while studying at La Verdad Christian College. Each one links to its source.</p>

                    @php
                        $projects = [
                            [
                                'name' => 'Visit Colleges',
                                'summary' => 'A web app that helps incoming college students find and explore nearby colleges in Apalit, Pampanga.',
                                'meta' => 'HTML, CSS, JS · Dev · 2025',
                                'url' => 'https://github.com/Itooonn/VisitColleges',
                            ],
                            [
                                'name' => 'Reserba Silid',
                                'summary' => 'A web app that lets La Verdad Christian College students view class schedules and reserve classrooms for events.',
                                'meta' => 'PHP · Dev · 2025',
                                'url' => 'https://github.com/Itooonn/Reserba-Silid',
                            ],
                            [
                                'name' => 'Hunter Exam',
                                'summary' => 'A text-based game that places the player among the examinees in the Hunter × Hunter anime.',
                                'meta' => 'Java · Dev · 2025',
                                'url' => 'https://github.com/IMOitself/hunterexam',
                            ],
                        ];
                    @endphp

                    <div class="row g-4 project-grid">
                        @foreach ($projects as $project)
                            <div class="col-sm-6 col-lg-4">
                                <a class="project-card" href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">
                                    <span class="project-thumb" aria-hidden="true">
                                        <span class="project-thumb-label">{{ $project['name'] }}</span>
                                    </span>
                                    <span class="project-body">
                                        <h2 class="project-name">{{ $project['name'] }}</h2>
                                        <span class="project-copy">{{ $project['summary'] }}</span>
                                        <span class="project-meta">{{ $project['meta'] }}</span>
                                        <span class="project-action">Source on GitHub <span aria-hidden="true">↗</span></span>
                                    </span>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
