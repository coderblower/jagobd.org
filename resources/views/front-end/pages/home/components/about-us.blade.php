<!-- About Start -->
<div class="container-fluid py-5 about-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="position-relative">
                    @if ($about_us)
                        @if ($about_us->image2)
                            {{-- <img src="{{ asset($about_us->image2) }}" class="img-fluid rounded image-2" alt="" /> --}}
                        @endif

                        @if ($about_us->image1)
                            <div class="position-absolute image-overlay">
                                {{-- <img src="{{ asset($about_us->image1) }}" class="img-fluid rounded" alt="" /> --}}
                            </div>
                        @endif
                    @endif
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-success">
                    @if ($siteSetting)
                        {{ app()->getLocale() == 'bn' ? $siteSetting->about_subtitle_bn : $siteSetting->about_subtitle_en }}
                    @else
                        <p>No subtitle available.</p>
                    @endif
                </h5>
                <h1 class="mb-4">
                    @if ($siteSetting)
                        {{ app()->getLocale() == 'bn' ? $about_us->title_bn : $about_us->title_en }}
                    @else
                        <p>No Title available.</p>
                    @endif
                </h1>
                <p class="description">
                    @if ($siteSetting)
                        {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($about_us->description_bn, 1250) : Illuminate\Support\Str::limit($about_us->description_en, 1250) }}
                    @else
                        <p>No description available.</p>
                    @endif
                </p>
                <a href="{{ route('abouts') }}" class="btn btn-style rounded-pill px-5 py-3">
                    {{ app()->getLocale() == 'bn' ? __('আরো বিস্তারিত') : __('More Details') }}
                </a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- CSS Styles -->
<style>
    .about-section {
        background-color: #f9f9f9;
        padding: 70px 0;
    }

    .image-2 {
        margin-bottom: 25%;
    }

    .image-overlay {
        top: 25%;
        left: 25%;
        width: 75%;
    }

    .description {
        color: #333;
        text-align: justify;
        margin-bottom: 20px;
    }

    .btn-style {
        background-color: #39b44b;
        color: #fff;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-style:hover {
        background-color: #2c8e39;
    }

    h5 {
        color: #39b44b;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: 700;
    }
</style>
