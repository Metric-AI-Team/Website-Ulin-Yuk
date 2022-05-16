@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Destinasi Wisata Bandung</h4>

        </div>
        @livewire('destination')


        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
