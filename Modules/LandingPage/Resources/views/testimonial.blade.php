@extends('landingpage::layouts.master')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Testimonial</h4>
            <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{secure_asset('img')}}/testimonial-1.jpg' alt=''>">
                <p class="fs-5">Aplikasi yang bagus, fiturnya lengkap, rekomendasi yang diberikan sesuai.</p>
                <h3>Sarah</h3>
                <span class="text-primary">Sales Manager</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{secure_asset('img')}}/testimonial-2.jpg' alt=''>">
                <p class="fs-5">Banyak pilihan rekomendasi kuliner, tampilannya cukup unik dan menarik, tingkatkan selalu kualitas pelayanan.</p>
                <h3>Josh</h3>
                <span class="text-primary">Product Manager</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{secure_asset('img')}}/testimonial-3.jpg' alt=''>">
                <p class="fs-5">Berbagai kuliner bisa ditemukan disini, fitur sangat membantu merekomendasikan kuliner Kota Bandung, hasil akurat, terima kasih.</p>
                <h3>Farhan</h3>
                <span class="text-primary">UI/UX Designer</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection
