@extends('front-end.layouts.master')
@section('title', 'All Video')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-4">
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">News</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">News</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid bg-light blog py-5">
        <div class="container">
            <div class="text-center mt-3 mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
               
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
            <div class="row">
                @foreach ($video as $key => $item)
                    <div class="col-md-3">
                        <div class="youtube-video-card" style="margin: 0">
                            <div class="youtube-video-wrapper">
                                <iframe width="100%" height="315" src="{{ asset($item->video_embed_src) }}"
                                    frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="video-content">
                                <h4 class="video-title text-secondary">
                                    <a href="{{ route('video.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a>
                                </h4>
                                <p class="video-description">
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_en, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                                    <a href="{{ route('video.details', $item->id) }}"><small>
                                            {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                </p>
                                <div class="video-details d-flex justify-content-between">
                                    <small class="text-muted">
                                        {{ app()->getLocale() == 'bn' ? $item->date : 'Published on : ' . $item->date }}
                                    </small>
                                    <a href="{{ asset($item->youtube_url) }}" target="_blank" class="text-primary">
                                        {{ app()->getLocale() == 'bn' ? 'ইউটিউবে দেখুন' : 'Watch on YouTube' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            @if ($video->total() > 20)
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item{{ $video->onFirstPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $video->previousPageUrl() }}"
                                    tabindex="-1">{{ app()->getLocale() == 'bn' ? __('আগের পৃষ্ঠা যান') : __('Previous') }}</a>
                            </li>
                            @for ($i = 1; $i <= $video->lastPage(); $i++)
                                <li class="page-item{{ $i == $video->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $video->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item{{ $video->hasMorePages() ? '' : ' disabled' }}">
                                <a class="page-link"
                                    href="{{ $video->nextPageUrl() }}">{{ app()->getLocale() == 'bn' ? __('পরবর্তী পৃষ্ঠা যান') : __('Next') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </div>

    </div>
    </div>


    <!-- Blog End -->


@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#news-details").addClass('active');
        });
    </script>
@endsection
