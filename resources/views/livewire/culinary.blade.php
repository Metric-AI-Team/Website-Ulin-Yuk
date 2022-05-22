<div>
    <form class="d-flex mb-5" wire:poll>
        <input wire:model="search" class="form-control me-2 border-warning" type="text" name="search" placeholder="Cari berdasarkan nama dan kategori" aria-label="Search" value="">
        <span class="btn btn-outline-warning" value="cari"><i class="fas fa-fw fa-search"></i></span>
      </form>
      @foreach ($culinary_categories as $values)
      <h1 class="display-5 mb-4">{{$values->culinary_category_name}}</h1>
      <div class="row g-4 mb-5">
        @foreach ($culinaries as $value)
        @if ($values->culinary_category_id == $value->culinary_category_id)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item d-flex position-relative text-center h-100">
                <img class="bg-img" src="{{$value->culinary_image}}" alt="">
                <div class="service-text p-5">
                    <img class="me-3" src="{{asset('img')}}/icons/Icon-Ulin-Yuk.png" alt="Icon">
                    <h3 class="mb-3">{{$value->culinary_title}}</h3>
                    <p class="mb-4 teks">{{$value->culinary_description_first}}</p>
                    <br />
                    <p class ="mb-4 teks">.......</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#destination{{$value->culinary_id}}">
                        <i class="fa fa-plus text-primary me-3"></i>Read More
                      </button>
                </div>
            </div>
        </div>
        @endif

        @endforeach
        </div>
        @endforeach

        {{ $culinaries->links() }}
        </div>
        </div>

        <!-- Modal -->
    @foreach ($culinaries as $value)
    <div wire:ignore.self class="modal fade" id="destination{{$value->culinary_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Culinary</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <img src="{{$value->culinary_image}}" class="card-img-top" alt="..." height="300">
                    <div class="card-body">
                      <h3 class="card-title">{{$value->culinary_title}}</h3>
                      <p class="card-text"><strong>{{$value->culinary_category_name}}</strong></p>
                      <p class="card-text">{{$value->culinary_description_first}}</p>
                      <p class="card-text">{{$value->culinary_description_second}}</p>
                      <p class="card-text"><strong>Rp.{{number_format($value->culinary_price)}},-</strong></p>

                      @if ($value->culinary_rating == '5')
                        <p class="card-text">Rating : *****</p>
                      @elseif ($value->culinary_rating == '4')
                        <p class="card-text">Rating : ****</p>
                      @elseif ($value->culinary_rating == '3')
                        <p class="card-text">Rating : ***</p>
                      @elseif ($value->culinary_rating == '2')
                        <p class="card-text">Rating : **</p>
                      @elseif ($value->culinary_rating == '1')
                        <p class="card-text">Rating : *</p>
                      @endif
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
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
