@extends('landingpage::layouts.master')
@section('content')
<!-- Profile Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Dashboard</h4>

        </div>
        <div class="card mb-3">
            <div class="card-body">
              <h1 class="card-title">Halo, {{ Auth::user()->name }}</h1>
            </div>
          </div>
        <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Destination</h2>
                  <a href="/destination" class="btn btn-primary">Jelajahi</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Culinary</h2>
                  <a href="/culinary" class="btn btn-primary">Jelajahi</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Chatbot</h2>
                    <a href="/chatbot" class="btn btn-primary">Jelajahi</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">Game</h2>
                    <a href="/game-cat" class="btn btn-primary">Jelajahi</a>
                  </div>
                </div>
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
