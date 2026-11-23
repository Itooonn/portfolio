<style>
    :root { font-family: "Segoe UI", Tahoma, Arial, sans-serif; font-synthesis: none; }
    body { min-height: 100vh; margin: 0; display: flex; flex-direction: column; color: #242424; font-family: inherit; font-size: 1rem; font-weight: 400; line-height: 1.55; }
    .unicolor { background-color: #6a1b9a; color: #ffffff; }
    .site-nav { display: flex; justify-content: center; gap: 1.75rem; padding: 1.15rem 1.5rem; }
    .nav-link-custom { color: #ffffff; font-size: 0.9375rem; font-weight: 600; line-height: 1.2; text-decoration: none; text-underline-offset: 0.3em; transition: opacity 0.2s ease, text-decoration-color 0.2s ease; }
    .nav-link-custom:hover, .nav-link-custom:focus-visible { color: #ffffff; opacity: 0.82; text-decoration: underline; }
    .nav-link-custom:focus-visible { outline: 2px solid #ffffff; outline-offset: 4px; }
    .text-color { color: #6a1b9a; }
    .page-title { margin: 0; color: #6a1b9a; font-size: clamp(2.25rem, 6vw, 4.5rem); font-weight: 600; line-height: 1.1; letter-spacing: -0.02em; text-wrap: balance; }
    .section-title { margin: 0; color: #6a1b9a; font-size: clamp(1.875rem, 3.5vw, 2.5rem); font-weight: 600; line-height: 1.2; letter-spacing: -0.015em; text-wrap: balance; }
    .subsection-title, .project-title { color: #6a1b9a; font-size: 1.125rem; font-weight: 600; line-height: 1.35; letter-spacing: 0; }
    .intro-text { margin: 1rem auto 0; max-width: 65ch; font-size: clamp(1.0625rem, 2vw, 1.25rem); font-weight: 400; line-height: 1.55; text-wrap: pretty; }
    .supporting-text, .project-copy, .about-copy, .goals-list { font-size: 1rem; font-weight: 400; line-height: 1.6; text-wrap: pretty; }
    .content-wrapper, .main-content, .home-content { flex: 1; }
    .home-content { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 2rem 1.5rem 10vh; }
    .content-wrapper { display: flex; align-items: center; padding: 4rem 0; }
    .main-content { display: flex; align-items: center; padding: 3rem 0; }
    .project-card { border: 0; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .project-card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.14); }
    .project-copy { margin-bottom: 0; color: #545454; }
    .about-copy { max-width: 65ch; margin: 1rem 0 0; }
    .subsection-title { margin: 2rem 0 0.75rem; }
    .goals-list { margin-bottom: 0; color: #545454; }
    @media (max-width: 575.98px) { .site-nav { gap: 1.15rem; padding: 1rem; } .content-wrapper, .main-content { align-items: flex-start; padding: 3rem 0; } }
</style>
