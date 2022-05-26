@extends('landingpage::layouts.master')
@section('content')
<!-- Profile Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Topup</h4>

        </div>
        <div class="card border-light mb-3 bg-ku">
            <div class="card-body">

                <!--  -->
                <form action="{{ url('profile/topup') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <strong>Saldo {{$profile->name}} : Rp.{{number_format($profile->saldo)}},-</strong>
                    <div class="form-group mb-3">
                        <label class="text-white" for="">Kode Voucher</label>
                        <input type="text" id="topup" name="topup" class="form-control" placeholder="Masukkan Kode Voucher" value="{{old('topup')}}">
                        @error('topup') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#cameradepan">
                        Camera Depan
                      </button>

                      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#camerabelakang">
                        Camera Belakang
                      </button>

                    <br>
                    <button type="submit" class="btn btn-primary">Topup</button>
                </form>
                <!--  -->
          </div>
         </div>


        </div>
    </div>

    <div class="modal fade" id="cameradepan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Camera Depan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <video id="preview" width="250" height="200"></video>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="camerabelakang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Camera Belakang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <video id="previews" width="250" height="200"></video>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- Profile End -->
@endsection
@section('scripts')
<script type="text/javascript">
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
      //alert(content);
      $("#topup").val(content);
    });
    Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
    let scanners = new Instascan.Scanner({ video: document.getElementById('previews') });
    scanners.addListener('scan', function (contentk) {
      //alert(content);
      $("#topup").val(contentk);
    });
    Instascan.Camera.getCameras().then(function (camerak) {
      if (camerak.length > 0) {
        scanners.start(camerak[1]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function (e) {
      console.error(e);
    });
</script>
@endsection
