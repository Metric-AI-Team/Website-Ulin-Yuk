@extends('landingpage::layouts.master')
@section('content')
<!-- Profile Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Profile</h4>

        </div>
        <div class="card border-light mb-3 bg-ku">
            <div class="card-body">

                <!--  -->
                <form action="{{ url('profile/update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-white" for="">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{old('name')}}{{$profile->name}}">
                        @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="{{old('email')}}{{$profile->email}}">
                        @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Foto</label>
                        <input type="text" name="image_link" class="form-control" placeholder="Masukkan Link Foto" value="{{old('image_link')}}{{$profile->image_link}}">
                        @error('image_link') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">No Hanphone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Masukkan No Hanphone" value="{{old('phone')}}{{$profile->phone}}">
                        @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Tempat Lahir</label>
                        <input type="text" name="place_of_birth" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{old('place_of_birth')}}{{$profile->place_of_birth}}">
                        @error('place_of_birth') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Tanggal Lahir</label>
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{old('date_of_birth')}}{{$profile->date_of_birth}}">
                        @error('date_of_birth') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Alamat</label>
                        <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat" value="{{old('address')}}{{$profile->address}}">
                        @error('address') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>


                    <div class="form-group">
                        <label class="text-white" for="">Latitude</label>
                        <input type="text" name="latitude" class="form-control" placeholder="Masukkan Latitude" value="{{old('latitude')}}{{$profile->latitude}}">
                        @error('latitude') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="">Longitude</label>
                        <input type="text" name="longitude" class="form-control" placeholder="Masukkan Longitude" value="{{old('longitude')}}{{$profile->longitude}}">
                        @error('longitude') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
