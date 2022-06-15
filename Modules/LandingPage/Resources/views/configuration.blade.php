@extends('landingpage::layouts.master')
@section('content')
<!-- Profile Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Konfigurasi</h4>

        </div>
        <div class="card border-light mb-3 bg-ku">
            <div class="card-body">

                <!--  -->
                <form action="{{ url('config/update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-white" for="">Data Kunci</label>
                        <input type="text" name="config_key" class="form-control" placeholder="Masukkan Data" value="{{old('config_key')}}{{$config->config_key}}">
                        @error('config_key') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Data Nilai</label>
                        <input type="text" name="config_value" class="form-control" placeholder="Masukkan Data" value="{{old('config_value')}}{{$config->config_value}}">
                        @error('config_value') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
                <!--  -->
          </div>
         </div>


        </div>
    </div>
</div>
<!-- Profile End -->
@endsection
@section('scripts')
<script src="https://unpkg.com/html5-qrcode" type="text/javascript">
@endsection
