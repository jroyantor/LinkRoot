<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" href="{{ asset('images/icon.png') }}"
        type = "image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LinkRoot') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar" style="background: #e9edc9;">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/icon.png')}}"/>LinkRoot</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/login')}}">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('register')}}">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Everything you do, keep in one simple page!</h1>
                        <p class="fs-4">Join millions of others to share your work 
                            from other spaces like Facebook,twitter,youTube, 
                            Instagram etc. and more..</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('register')}}">Get Started for Free!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold text-info">link.root/yourname</h2>
                                <p class="mb-0">Type your username and get started!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold text-success">Create and Customize</h2>
                                <p class="mb-0">As always, create and share your links and update any time!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold text-warning">Share on your Social Media</h2>
                                <p class="mb-0">Share your link root link in any of your social space.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                                <h2 class="fs-4 fw-bold">Monitor Your Links</h2>
                                <p class="mb-0">Monitor your link views with your visalized dashboard.</p>
                            </div>
                        </div>
                    </div>
                   
            
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5" style="background: #ccd5ae;">
            <div class="container"><p class="m-0 text-center text-dark">Copyright &copy; LinkRoot 2023</p></div>
        </footer>
    </body>
    </html>