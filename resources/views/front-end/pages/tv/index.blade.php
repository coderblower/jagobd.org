@extends('front-end.layouts.master')

@section('title', __('Video Feed'))

@section('content')

<!-- Full-Page Hero Section Start -->
<div class="hero-container d-flex align-items-center justify-content-center position-relative bg-white" style="height: 100vh;">
    <div class="text-center">
        <img src="{{ asset('uploads/BNMTV.png') }}" alt="{{ __('Logo') }}" class="img-fluid mb-4" style="max-width: 400px;">
        <h1 class="display-4 text-dark">{{ __('Welcome to Our Video Feed') }}</h1>
        <p class="lead text-muted">{{ __('Dive into our live streams, featured content, and latest videos') }}</p>
        <a href="#live-stream" class="btn btn-outline-dark btn-lg mt-4">{{ __('Watch Live') }}</a>
    </div>
</div>
<!-- Full-Page Hero Section End -->

<!-- Live Stream Section Start -->
<div id="live-stream" class="container-fluid py-5 bg-white text-center border-bottom">
    <div class="container">
        <h2 class="display-5 text-dark mb-4">{{ __('Live Stream') }}</h2>
        <div class="ratio ratio-16x9 mx-auto" style="max-width: 1200px;">
            <iframe src="https://www.youtube.com/embed/live_stream?channel=UCNUFterLJ9vpFZZ0try7sLA" allowfullscreen></iframe>
        </div>
        <p class="lead text-muted mt-3">{{ __('Tune in to our live broadcast') }}</p>
    </div>
</div>
<!-- Live Stream Section End -->

<!-- Featured Videos Section Start -->
<div class="container-fluid py-5 bg-white text-center">
    <div class="container">
        <h2 class="display-5 text-dark mb-4">{{ __('Featured Videos') }}</h2>
        <div class="row gx-5 gy-5">
            @foreach ($bnmtvs as $video)
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-0">
                            <div class="video-thumbnail position-relative">
                                <iframe src="{{ $video->video_url }}" class="w-100" allowfullscreen></iframe>
                                <div class="position-absolute bottom-0 start-0 bg-dark text-white px-3 py-2">{{ app()->getLocale() == 'bn' ? $video->title_bn : $video->title_en }}</div>
                            </div>
                            <div class="p-3">
                                <p class="card-text text-muted">{{ Str::limit(app()->getLocale() == 'bn' ? $video->description_bn : $video->description_en, 100) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Featured Videos Section End -->

<!-- Video Feed Section Start -->
<div class="container-fluid py-5 bg-white text-center">
    <div class="container">
        <h2 class="display-5 text-dark mb-4">{{ __('Latest Videos') }}</h2>
        <div class="row gx-5 gy-5">
            @foreach ($bnmtvs as $bnmtv)
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-0">
                            @if ($bnmtv->video_url)
                                <div class="video-thumbnail position-relative">
                                    <iframe src="{{ $bnmtv->video_url }}" class="w-100" allowfullscreen></iframe>
                                    <div class="position-absolute bottom-0 start-0 bg-dark text-white px-3 py-2">{{ app()->getLocale() == 'bn' ? $bnmtv->title_bn : $bnmtv->title_en }}</div>
                                </div>
                            @elseif ($bnmtv->video_path)
                                <div class="video-thumbnail position-relative">
                                    <video controls class="w-100">
                                        <source src="{{ Storage::url($bnmtv->video_path) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="position-absolute bottom-0 start-0 bg-dark text-white px-3 py-2">{{ app()->getLocale() == 'bn' ? $bnmtv->title_bn : $bnmtv->title_en }}</div>
                                </div>
                            @endif
                            <div class="p-3">
                                <p class="card-text text-muted">{{ Str::limit(app()->getLocale() == 'bn' ? $bnmtv->description_bn : $bnmtv->description_en, 100) }}</p>
                                <div class="d-flex justify-content-between">
                                    <p class="mb-0 text-muted"><small>{{ __('Likes') }}: <span id="like-count-{{ $bnmtv->id }}">{{ $bnmtv->like }}</span></small></p>
                                    <button class="btn btn-outline-dark btn-sm share-button" data-id="{{ $bnmtv->id }}" data-url="{{ route('bnmtvs.show', $bnmtv->id) }}">{{ __('Share') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Video Feed Section End -->

<!-- Subscribe Section Start -->
<div class="container-fluid py-5 bg-white text-center border-top">
    <div class="container">
        <h2 class="display-5 text-dark mb-4">{{ __('Stay Connected') }}</h2>
        <p class="lead text-muted">{{ __('Subscribe to our newsletter for the latest updates and exclusive content') }}</p>
        <form action="#" method="POST" class="d-flex justify-content-center mt-4">
            @csrf
            <input type="email" name="email" class="form-control me-2" placeholder="{{ __('Enter your email') }}" required>
            <button type="submit" class="btn btn-dark">{{ __('Subscribe') }}</button>
        </form>
    </div>
</div>
<!-- Subscribe Section End -->

<!-- Share Modal -->
<!-- Share Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shareModalLabel">{{ __('Share this video') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('Close') }}"></button>
            </div>
            <div class="modal-body text-center">
                <p>{{ __('Share this video on your favorite social media platform:') }}</p>
                <div class="d-flex justify-content-around">
                    <a href="#" id="facebook-share" target="_blank" class="btn btn-primary">
                        <i class="fab fa-facebook-f"></i> {{ __('Facebook') }}
                    </a>
                    <a href="#" id="twitter-share" target="_blank" class="btn btn-info">
                        <i class="fab fa-twitter"></i> {{ __('Twitter') }}
                    </a>
                    <a href="#" id="whatsapp-share" target="_blank" class="btn btn-success">
                        <i class="fab fa-whatsapp"></i> {{ __('WhatsApp') }}
                    </a>
                    <a href="#" id="linkedin-share" target="_blank" class="btn btn-secondary">
                        <i class="fab fa-linkedin-in"></i> {{ __('LinkedIn') }}
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#videos").addClass('active');

        $('.share-button').click(function() {
            let bnmtvId = $(this).data('id');
            let videoUrl = $(this).data('url');
            $('#whatsapp-share').attr('href', `https://api.whatsapp.com/send?text=${encodeURIComponent(videoUrl)}`);
            $('#facebook-share').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(videoUrl)}`);
            $('#shareModal').modal('show');
        });
    });
</script>
@endsection
