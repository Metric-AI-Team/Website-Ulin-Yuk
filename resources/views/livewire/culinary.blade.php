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
                    <img class="me-3" src="{{secure_asset('img')}}/icons/Icon-Ulin-Yuk.png" alt="Icon">
                    <h3 class="mb-3">{{$value->culinary_title}}</h3>
                    <p class="mb-4 teks">{{$value->culinary_description_first}}</p>
                    <br />
                    <p class ="mb-4 teks">.......</p>
                    <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
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

</div>
