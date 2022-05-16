@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Wisata Kuliner Bandung</h4>
            <h1 class="display-5 mb-4">Here is some of Bandung's finest culinary you should try! </h1>
        </div>

        @livewire('culinary')


        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
