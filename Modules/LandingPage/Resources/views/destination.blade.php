@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Destinasi Wisata Bandung</h4>

        </div>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#recommendation">
            Rekomendasi Destinasi
        </button>

        <!-- Modal -->
  <div class="modal fade" id="recommendation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Destinasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div style="text-align:center;">
            <iframe src="https://share.streamlit.io/rusydimuhammad/ulinyukrecommendertourism/main/app.py" allow="camera" frameborder="0" width="750" height="800"></iframe>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

        @livewire('destination')


        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
