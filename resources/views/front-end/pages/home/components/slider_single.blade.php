
<div class="container-fluid px-0 custom-carousel" style="">



    <div id="carouselId" class="carousel slide" style="" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($sliders as $key => $item)
                <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}"
                    class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @if ($sliders && $sliders->count() > 0)
                @foreach ($sliders as $key => $item)
                    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                        <img src="{{(str_contains($item->image, 'bnm_project'))? $item->image:asset($item->image) }}" class="img-fluid" alt="Slide {{ $key + 1 }}">

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
