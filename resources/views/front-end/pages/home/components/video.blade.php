<div class="container-fluid testimonial py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
            @if ($siteSetting)
                <h5 class="text-primary">
                    {{ app()->getLocale() == 'bn' ? $siteSetting->video_subtitle_bn : $siteSetting->video_subtitle_en }}
                </h5>
            @else
                <p>No subtitle available.</p>
            @endif

            @if ($siteSetting)
                <h1>
                    {{ app()->getLocale() == 'bn' ? $siteSetting->video_title_bn : $siteSetting->video_title_en }}
                </h1>
            @else
                <p>No title available.</p>
            @endif
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @foreach ($videos as $key => $item)
                <div class="youtube-video-card">
                    <div class="youtube-video-wrapper">
                        <iframe src="{{ asset($item->video_embed_src) }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="video-content">
                        <h4 class="video-title text-secondary">
                            <a href="{{ route('video.details', $item->id) }}">
                                {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                            </a>
                        </h4>
                        <p class="video-description">
                            {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                            <a href="{{ route('video.details', $item->id) }}">
                                <small>{{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small>
                            </a>
                        </p>
                        <div class="video-details d-flex justify-content-between">
                            <small class="text-muted">
                                {{ app()->getLocale() == 'bn' ? $item->date : `Published on : $item->date`, app()->getLocale() }}
                            </small>
                            <a href="{{ asset($item->youtube_url) }}" target="_blank" class="text-primary">
                                {{ app()->getLocale() == 'bn' ? 'ইউটিউবে দেখুন' : 'Watch on YouTube' }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
            <a href="{{ route('video-page') }}" class="btn btn-primary"
                style="background-color: #e82629; border-color: #e82629">
                {{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}
            </a>
        </div>
    </div>
</div>

<style>
    .youtube-video-card {
        display: flex;
        flex-direction: column;
        height: 400px;
        /* Adjust the height as needed */
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .youtube-video-wrapper {
        height: 225px;
        /* Adjust the height as needed */
        overflow: hidden;
    }

    .youtube-video-wrapper iframe {
        width: 100%;
        height: 100%;
    }

    .video-content {
        flex: 1;
        padding: 15px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .video-title {
        margin: 0;
        font-size: 18px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .video-description {
        margin: 10px 0;
        color: black;
        flex: 1;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .video-details {
        margin-top: 10px;
        font-size: 14px;
        color: #666;
    }

    .video-details a {
        text-decoration: none;
    }
</style>
