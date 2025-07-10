<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @else
            <style>
                body {
                    font-family: 'Nunito';
                    background: #f7fafc;
                }
            </style>
        @endif
    </head>
    <body>
        <div class="container-fluid fixed-top p-4">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-muted">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-fluid my-5 pt-5 px-5">
            <div class="row justify-content-center px-4">
                <div class="col-md-12 col-lg-9">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="my-4" style="width: 271px">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <!-- SVG paths here -->
                        </g>
                    </svg>

                    <div class="card shadow-sm">
                        <div class="row">
                            <div class="col-md-6 pe-0">
                                <div class="card-body border-end border-bottom p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                        </div>
                                        <div class="ps-3">
                                            <div class="mb-2">
                                                <a href="https://laravel.com/docs" class="h5 fw-bold text-dark">Documentation</a>
                                            </div>
                                            <p class="text-muted small">
                                                Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="card-body border-bottom p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        </div>
                                        <div class="ps-3">
                                            <div class="mb-2">
                                                <a href="https://laracasts.com" class="h5 fw-bold text-dark">Laracasts</a>
                                            </div>
                                            <p class="text-muted small">
                                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="card-body border-end p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                        </div>
                                        <div class="ps-3 text-sm">
                                            <div class="mb-2">
                                                <a href="https://laravel-news.com/" class="h5 fw-bold text-dark">Laravel News</a>
                                            </div>
                                            <p class="text-muted small">
                                                Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ps-0">
                                <div class="card-body p-3 h-100">
                                    <div class="d-flex flex-row bd-highlight pt-2">
                                        <div>
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <div class="ps-3">
                                            <div class="mb-2">
                                                <span class="h5 fw-bold text-dark">Vibrant Ecosystem</span>
                                            </div>
                                            <p class="text-muted small">
                                                Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="text-muted">Forge</a>, <a href="https://vapor.laravel.com" class="text-muted">Vapor</a>, <a href="https://nova.laravel.com" class="text-muted">Nova</a>, and <a href="https://envoyer.io" class="text-muted">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="text-muted">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="text-muted">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="text-muted">Echo</a>, <a href="https://laravel.com/docs/horizon" class="text-muted">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="text-muted">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="text-muted">Telescope</a>, and more.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <div class="text-sm text-muted">
                            <div class="d-flex align-items-center">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="text-muted" style="width: 18px">
                                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>

                                <a href="https://laravel.bigcartel.com" class="text-muted ms-2">
                                    Shop
                                </a>

                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ms-4 text-muted" style="width: 18px">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>

                                <a href="https://github.com/sponsors/taylorotwell" class="text-muted ms-2">
                                    Sponsor
                                </a>
                            </div>
                        </div>

                        <div class="text-sm text-muted">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
