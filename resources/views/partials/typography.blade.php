<style>
    :root { font-family: "Segoe UI", Tahoma, Arial, sans-serif; font-synthesis: none; }
    body { min-height: 100vh; margin: 0; display: flex; flex-direction: column; color: #242424; font-family: inherit; font-size: 1rem; font-weight: 400; line-height: 1.55; }
    .unicolor { background-color: #6a1b9a; color: #ffffff; }
    .site-nav { display: flex; flex-wrap: wrap; justify-content: center; gap: 0 1.75rem; padding: 0.45rem 1.5rem; }
    .nav-link-custom { display: inline-flex; align-items: center; min-height: 44px; padding: 0 0.125rem; color: #ffffff; font-size: 0.9375rem; font-weight: 600; line-height: 1.2; text-decoration: none; text-underline-offset: 0.35em; transition: opacity 0.2s ease; }
    .nav-link-custom:hover, .nav-link-custom:focus-visible { color: #ffffff; opacity: 0.82; text-decoration: underline; }
    .nav-link-custom[aria-current="page"] { text-decoration: underline; text-decoration-thickness: 2px; }
    .nav-link-custom:focus-visible { outline: 2px solid #ffffff; outline-offset: 4px; opacity: 1; }
    .text-color { color: #6a1b9a; }
    .page-title { margin: 0; color: #6a1b9a; font-size: clamp(2.25rem, 6vw, 4.5rem); font-weight: 600; line-height: 1.1; letter-spacing: -0.02em; text-wrap: balance; }
    .section-title { margin: 0; color: #6a1b9a; font-size: clamp(1.875rem, 3.5vw, 2.5rem); font-weight: 600; line-height: 1.2; letter-spacing: -0.015em; text-wrap: balance; }
    .subsection-title, .project-name { color: #6a1b9a; font-size: 1.125rem; font-weight: 600; line-height: 1.35; letter-spacing: 0; }
    .intro-text { margin: 1rem auto 0; max-width: 65ch; font-size: clamp(1.0625rem, 2vw, 1.25rem); font-weight: 400; line-height: 1.55; text-wrap: pretty; }
    .supporting-text, .project-copy, .about-copy, .goals-list { font-size: 1rem; font-weight: 400; line-height: 1.6; text-wrap: pretty; }
    .content-wrapper, .main-content, .home-content { flex: 1; }
    .home-content { display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 2rem 1.5rem 10vh; }
    .content-wrapper { display: flex; align-items: center; padding: 4rem 0; }
    .main-content { display: flex; align-items: center; padding: 3rem 0; }
    .page-top { align-items: flex-start; padding-top: 3.5rem; }
    .page-top .intro-text { margin-left: 0; }

    .project-grid { margin-top: 2.5rem; }
    .page-top, .page-top > .container, .page-top .row, .page-top [class*="col-"] { min-width: 0; }
    .project-card { display: flex; flex-direction: column; height: 100%; min-width: 0; overflow: hidden; border: 1px solid rgba(106, 27, 154, 0.12); border-radius: 0.75rem; background-color: #ffffff; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); color: inherit; text-decoration: none; transition: box-shadow 0.2s ease, border-color 0.2s ease; }
    .project-card:hover, .project-card:focus-visible { border-color: rgba(106, 27, 154, 0.35); box-shadow: 0 10px 25px rgba(0, 0, 0, 0.14); }
    .project-card:focus-visible { outline: 3px solid #6a1b9a; outline-offset: 3px; }
    .project-thumb { display: flex; align-items: center; justify-content: center; aspect-ratio: 16 / 10; padding: 1rem; border-bottom: 1px solid rgba(106, 27, 154, 0.12); background-image: linear-gradient(135deg, #f4ebfa 0%, #e6d3f2 100%); text-align: center; }
    .project-thumb-label { color: #6a1b9a; font-size: 0.9375rem; font-weight: 600; letter-spacing: 0.02em; opacity: 0.85; }
    .project-body { display: flex; flex: 1; flex-direction: column; gap: 0.5rem; min-width: 0; padding: 1.25rem 1.375rem 1.375rem; text-align: left; }
    .project-name { margin: 0; }
    .project-copy { display: -webkit-box; overflow: hidden; -webkit-box-orient: vertical; -webkit-line-clamp: 3; margin: 0; color: #545454; }
    .project-meta { margin: 0; color: #6b6b6b; font-size: 0.8125rem; font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase; }
    .project-action { display: inline-flex; align-items: center; gap: 0.35rem; min-height: 44px; margin-top: auto; padding-top: 0.5rem; color: #6a1b9a; font-size: 0.9375rem; font-weight: 600; }

    .contact-block { max-width: 65ch; margin: 4rem 0 1rem; padding-top: 2rem; border-top: 2px solid rgba(106, 27, 154, 0.2); text-align: left; }
    .contact-title { margin: 0 0 0.5rem; color: #6a1b9a; font-size: 1.375rem; font-weight: 600; line-height: 1.3; }
    .contact-copy { margin: 0 0 1rem; color: #545454; }
    .contact-links { display: flex; flex-wrap: wrap; gap: 0 2rem; }
    .contact-link { display: inline-flex; align-items: center; min-height: 44px; color: #6a1b9a; font-weight: 600; text-decoration: underline; text-underline-offset: 0.25em; }
    .contact-link:hover, .contact-link:focus-visible { color: #4a1269; }
    .contact-link:focus-visible { outline: 2px solid #6a1b9a; outline-offset: 3px; border-radius: 2px; }

    .about-copy { max-width: 65ch; margin: 1rem 0 0; }
    .subsection-title { margin: 2rem 0 0.75rem; }
    .goals-list { margin-bottom: 0; color: #545454; }
    @media (max-width: 575.98px) { .site-nav { gap: 0 1.15rem; padding: 0.25rem 1rem; } .content-wrapper, .main-content { align-items: flex-start; padding: 3rem 0; } .page-top { padding-top: 2.5rem; } }
    @media (prefers-reduced-motion: reduce) { .nav-link-custom, .project-card { transition: none; } }
</style>
