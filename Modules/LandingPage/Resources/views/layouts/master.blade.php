<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ulin Yuk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
  <link href="{{secure_asset('img')}}/ulin-yuk.png" rel="icon">
  <link href="{{secure_asset('img')}}/ulin-yuk.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{secure_asset('lib')}}/animate/animate.min.css" rel="stylesheet">
    <link href="{{secure_asset('lib')}}/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{secure_asset('lib')}}/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{secure_asset('css')}}/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{secure_asset('css')}}/style.css" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/Icon-Ulin-Yuk.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+6281234567890"><i class="fa fa-phone-alt me-2"></i>+62 812 3456 7890</a>
                    <a class="text-body px-2" href="mailto:ulinyuk@gmail.com"><i class="fa fa-envelope-open me-2"></i>ulinyuk@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://facebook.com/orbitfutureacademy/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://twitter.com/orbitacademyid"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href="https://www.linkedin.com/company/orbitfutureacademy/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href="https://www.instagram.com/orbitfutureacademyid/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h1 class= m-0"><img class="me-3" src="{{secure_asset('img')}}/icons/Icon-Ulin-Yuk.png" alt="Icon">Ulin Yuk</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="/destination" class="dropdown-item">Destination</a>
                        <a href="/culinary" class="dropdown-item">Culinary</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-0 m-0">
                        <!-- <a href="feature.html" class="dropdown-item">Our Features</a> -->
                        <!-- <a href="project.html" class="dropdown-item">Our Projects</a> -->
                        <a href="/team" class="dropdown-item">Team Members</a>
                        <!-- <a href="appointment.html" class="dropdown-item">Appointment</a> -->
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        <a href="/contact" class="dropdown-item">Contact</a>
                        <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
            </div>
            @if (empty(auth()->user()->id))
                                    <a class="m-1 btn btn-primary py-2 px-4 d-none d-lg-block" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="m-1 btn btn-primary py-2 px-4 d-none d-lg-block" href="/register">{{ __('Register') }}</a>

                            @elseif(!empty(auth()->user()->id))
                            <div class="dropdown">
                                <a class="btn btn-primary py-2 px-4 d-none d-lg-block dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                                  <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                  {{-- <li><a class="dropdown-item" href="/chatbot">Chatbot</a></li> --}}
                                  <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a></li>
                                </ul>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </div>
                                @endif
            {{-- <a href="/chatbot" class="btn btn-primary py-2 px-4 d-none d-lg-block">Chatbot</a> --}}
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bandung, West Java</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 3456 7890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ulinyuk@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="https://twitter.com/orbitacademyid"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="https://facebook.com/orbitfutureacademy/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="https://www.youtube.com/channel/UCsWLJYr7D3tlCeQxriYurnQ"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href="https://www.linkedin.com/company/orbitfutureacademy/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Services</h3>
                    <a class="btn btn-link" href="/destination">Destination</a>
                    <a class="btn btn-link" href="/culinary">Culinary</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="/about">About Us</a>
                    <a class="btn btn-link" href="/contact">Contact Us</a>
                    <a class="btn btn-link" href="/testimonial">Testimonial</a>
                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Ulin Yuk</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br> Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{secure_asset('qrcode')}}/js/instascan.min.js"></script>
    <script src="{{secure_asset('lib')}}/wow/wow.min.js"></script>
    <script src="{{secure_asset('lib')}}/easing/easing.min.js"></script>
    <script src="{{secure_asset('lib')}}/waypoints/waypoints.min.js"></script>
    <script src="{{secure_asset('lib')}}/counterup/counterup.min.js"></script>
    <script src="{{secure_asset('lib')}}/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{secure_asset('lib')}}/tempusdominus/js/moment.min.js"></script>
    <script src="{{secure_asset('lib')}}/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{secure_asset('lib')}}/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    @yield('scripts')
    @livewireScripts

    <!-- Template Javascript -->
    <script src="{{secure_asset('js')}}/main.js"></script>

</body>

</html>
