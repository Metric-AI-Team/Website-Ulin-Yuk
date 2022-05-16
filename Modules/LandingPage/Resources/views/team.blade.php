@extends('landingpage::layouts.master')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Members</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Members</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Team Members</h4>
            <h1 class="display-5 mb-4">METRIC AI</h1>
        </div>

        <div class="row g-0 team-items">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/bella.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://linkedin.com/in/bella-septina-ika-hartanti/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Bella Septina Ika Hartanti</h3>
                        <span class="text-primary">Coach</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/rusydi.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://linkedin.com/in/rusydimuhammad"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/rusydimuhammad/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Muhammad Rusydi</h3>
                        <span class="text-primary">AI Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/fanny.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://www.instagram.com/fannyfbryn_/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="mt-2">Fanny Febryani</h3>
                        <span class="text-primary">AI Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/ikhwan.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://www.linkedin.com/in/muhammad-ikhwan-fathulloh-4a9835165/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square" href="https://instagram/ikhwan_fathulloh/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="mt-2">Muhammad Ikhwan F</h3>
                        <span class="text-primary">Back End Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/jauhar.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://www.linkedin.com/in/ananda-jauhar-firdaus-313879189/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/anandajauhar/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Ananda Jauhar Firdaus</h3>
                        <span class="text-primary">Front End Developer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{secure_asset('img')}}/team/rafly.png" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square" href="https://www.linkedin.com/in/raframput/"><i class="fab fa-linkedin"></i></a>
                            <a class="btn btn-square" href="https://www.instagram.com/raframput/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h3 class="mt-2">Rafly Ramadhani Putra</h3>
                        <span class="text-primary">Front End Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection
