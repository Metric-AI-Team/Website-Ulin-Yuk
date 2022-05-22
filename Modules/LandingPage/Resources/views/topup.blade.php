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
                    <div class="form-group">
                        <label class="text-white" for="">Kode Voucher</label>
                        <input type="text" name="saldo" class="form-control" placeholder="Masukkan Kode Voucher" value="{{old('saldo')}}">
                        @error('saldo') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Topup</button>
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
