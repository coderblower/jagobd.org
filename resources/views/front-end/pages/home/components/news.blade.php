<div class="container-fluid bg-light blog py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
            @if ($siteSetting)
                <h5 class="text-primary">
                    {{ app()->getLocale() == 'bn' ? $siteSetting->news_subtitle_bn : $siteSetting->news_subtitle_en }}
                </h5>
            @else
                <p>No subtitle available.</p>
            @endif
            @if ($siteSetting)
                <h1>
                    {{ app()->getLocale() == 'bn' ? $siteSetting->news_title_bn : $siteSetting->news_title_en }}
                </h1>
            @else
                <p>No title available.</p>
            @endif
        </div>
        <div class="row justify-content-center">
            @foreach ($news as $key => $item)
                <div class="col-lg-6 col-xl-4 mb-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded" style="height: 400px; overflow: hidden;">
                        <img src="{{(str_contains($item->image, 'bnm_project'))? $item->image:asset($item->image) }}" class="img-fluid w-100 rounded-top" alt="" style="height: 200px; object-fit: cover;" />
                        <div class="blog-content position-relative px-3" style="height: 120px; margin-top: 30px; overflow: hidden;">

                            <h5 class="text-truncate">
                                <a href="{{ route('news.details', $item->id) }}">
                                    {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                </a>
                            </h5>

                            <p class="py-2 text-truncate" style="color: black">
                                {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                            </p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border rounded-bottom"
                            style="background-color: #39b44b">

                            <span class="text-white">{{ app()->getLocale() == 'bn' ? $item->date : $item->date, app()->getLocale() }}</span>
                            <a href="{{ route('news.details', $item->id) }}" class="text-white"><small>
                                    {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
            <a href="{{ route('news-page') }}" class="btn btn-primary"
                style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}</a>
        </div>
    </div>
</div>
