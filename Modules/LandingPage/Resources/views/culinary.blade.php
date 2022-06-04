@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Wisata Kuliner Bandung</h4>
            <h1 class="display-5 mb-4">Here is some of Bandung's finest culinary you should try! </h1>
        </div>

        <div class="row">
            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#detection">
                    Deteksi Kuliner
                </button>
            </div>
            <div class="col" align="right">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#recommendation">
                    Rekomendasi Kuliner
                </button>
            </div>
        </div>

  <!-- Modal -->
  <div class="modal fade" id="detection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deteksi Kuliner</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div style="text-align:center;">
            <iframe src="https://ulinyuk.netlify.app/" allow="camera" frameborder="0" width="500" height="300"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="recommendation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Kuliner</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div style="text-align:center;">
            <iframe src="https://share.streamlit.io/rusydimuhammad/ulinyukrecommenderrestaurant/main/app.py" allow="camera" frameborder="0" width="750" height="800"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        @livewire('culinary')
        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
@section('scripts')

@endsection
