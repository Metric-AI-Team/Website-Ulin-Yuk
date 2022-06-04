<div>
    <form class="d-flex mb-5" wire:poll>
        <input wire:model="search" class="form-control me-2 border-warning" type="text" name="search" placeholder="Cari berdasarkan nama dan kategori" aria-label="Search" value="">
        <span class="btn btn-outline-warning" value="cari"><i class="fas fa-fw fa-search"></i></span>
      </form>
      @foreach ($destination_categories as $values)
      <h1 class="display-5 mb-4">{{$values->destination_category_name}}</h1>
    <div class="row g-4 mb-5">
    @foreach ($destinations as $value)
    @if ($values->destination_category_id == $value->destination_category_id)
    <div class="col-lg-6 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item d-flex position-relative text-center h-100">
            <img class="bg-img" src="{{$value->destination_image}}" alt="">
            <div class="service-text p-5">
                <img class="me-3" src="{{secure_asset('img')}}/icons/Icon-Ulin-Yuk.png" alt="Icon">
                <h3 class="mb-3">{{$value->destination_title}}</h3>
                <p class="mb-4 teks">{{$value->destination_description_first}}</p>
                <br />
                <p class ="mb-4 teks">.......</p>
                <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#destination{{$value->destination_id}}">
                        <i class="fa fa-plus text-primary me-3"></i>Read More
                      </button>
                </div>
                  <div class="col">
                    @if(empty(auth()->user()->id))

                    @elseif(!empty(auth()->user()->id))
                    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$value->destination_id}}" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-star text-primary me-3"></i>Rating
                      </button>
                      <div class="collapse" id="collapseExample{{$value->destination_id}}" wire:ignore.self>
                        <form wire:submit.prevent="createRating({{$value->destination_id}})" class="mb-3">

                            <div class="form-group">
                                <label class="text-white" for="">Rekomendasi</label>
                                <input type="text" name="destination_recommendation" wire:model="destination_recommendation" class="form-control text-dark" placeholder="Beri Rekomendasi">
                                @error('destination_recommendation') <div class="alert alert-danger">{{ $message }}</div> @enderror
                              </div>
                              <div class="form-group">
                                <label class="text-white" for="">Rating</label>
                                <input type="text" name="destination_rating" wire:model="destination_rating" class="form-control text-dark" placeholder="Beri Rating">
                                @error('destination_rating') <div class="alert alert-danger">{{ $message }}</div> @enderror
                              </div>
                              <br>
                              <button class="btn btn-primary" wire:submit.prevent="createRating({{$value->destination_id}})"><i class="fa fa-plus text-primary me-3"></i>Kirim</button>
                        </form>
                          @foreach ($destination_ratings as $valuex)
                            @if ($value->destination_id == $valuex->destination_id)
                            <h4 class="fw-bold fs-1">{{$valuex->name}}</h4>
                            <p class="fw-medium text-secondary">Rekomendasi : <br> {{$valuex->destination_recommendation}}</p>
                            <p class="mb-4 fw-medium text-secondary">Rating : {{number_format($valuex->destination_rating)}}</p>
                            @if(empty(auth()->user()->id))

                            @elseif(!empty(auth()->user()->id == $valuex->id))
                            <button class="btn btn-sm btn-danger" wire:click.prevent="destroyRating({{$valuex->destination_rating_id}})"><i class="fa fa-eraser text-primary me-3"></i>Hapus</button>
                            @endif
                            @endif
                            @endforeach
            </div>

          @endif
                  </div>
                </div>
            </div>

        </div>
    </div>

      @endif

    @endforeach
    </div>
    @endforeach

    {{ $destinations->links() }}
    </div>
    </div>

    <!-- Modal -->
    @foreach ($destinations as $value)
<div wire:ignore.self class="modal fade" id="destination{{$value->destination_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Destination</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <img src="{{$value->destination_image}}" class="card-img-top" alt="..." height="300">
                <div class="card-body">
                  <h3 class="card-title">{{$value->destination_title}}</h3>
                  <p class="card-text"><strong>{{$value->destination_category_name}}</strong></p>
                  <div class="row mb-3">
                    <div class="col">
                        <iframe
                    src="https://maps.google.com/maps?q=+{{$value->destination_latitude}}+,+{{$value->destination_longitude}}+&hl=ina&z=14&amp;output=embed">
                    </iframe>
                    </div>
                    <div class="col">
                        <p class="card-text"><strong>Latitude : {{$value->destination_latitude}}</strong></p>
                        <p class="card-text"><strong>Longitude : {{$value->destination_longitude}}</strong></p>
                    </div>
                  </div>
                  <p class="card-text">{{$value->destination_description_first}}</p>
                  <p class="card-text">{{$value->destination_description_second}}</p>

                  <div class="row mb-3">
                    <div class="col">
                        <div class="visible-print text-center border-light">
						    {!! QrCode::size(100)->generate($value->destination_device_code); !!}
						</div>
                    </div>

                    <div class="col">
                        <p class="card-text"><strong>Rp.{{number_format($value->destination_price)}},-</strong></p>
                        @if ($value->destination_status == '1')
                            <p class="card-text">Buka</p>
                        @else
                            <p class="card-text">Tutup</p>
                        @endif
                        @if ($value->destination_rating == '5')
                            <p class="card-text">Rating : *****</p>
                        @elseif ($value->destination_rating == '4')
                            <p class="card-text">Rating : ****</p>
                        @elseif ($value->destination_rating == '3')
                            <p class="card-text">Rating : ***</p>
                        @elseif ($value->destination_rating == '2')
                            <p class="card-text">Rating : **</p>
                        @elseif ($value->destination_rating == '1')
                            <p class="card-text">Rating : *</p>
                        @endif
                    </div>
                  </div>


                </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>
