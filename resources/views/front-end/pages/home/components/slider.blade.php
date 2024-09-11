<div class="container-fluid px-0 custom-carousel" style="margin-top: 82px">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $key => $item)
                <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @if($sliders && $sliders->count() > 0)
    @foreach ($sliders as $key => $item)
        <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
            <img src="{{ asset($item->image) }}" class="img-fluid" alt="Slide {{ $key + 1 }}">
            <div class="carousel-caption">
                <div class="container carousel-content">
                    <h1 class="text-white display-4 mb-4 animated fadeInRight">
                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                    </h1>
                    <p class="mb-4 text-white fs-5 animated fadeInDown">
                        {{ app()->getLocale() == 'bn' ? $item->description_bn : $item->description_en }}
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('abouts') }}">
                            <button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft carousel-btn">
                                {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}
                            </button>
                        </a>
                        <a href="{{ route('contact') }}">
                            <button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight carousel-btn">
                                {{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Contact Us' }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p>No slides available.</p>
@endif

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
