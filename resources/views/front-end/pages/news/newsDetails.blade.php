@extends('front-end.layouts.master')
@section('title')
    {{ app()->getLocale() == 'bn' ? $news->title_bn : $news->title_en }}
@endsection
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
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                
                                @if ($siteSetting)
                                <h2 class="card-title">
                                    {{ app()->getLocale() == 'bn' ? $news->title_bn : $news->title_en }}
                                </h2>
                                @else
                                    <p>No title available.</p>
                                @endif
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{ app()->getLocale() == 'bn' ? __('তারিখ') : __('Date') }}: {{ $news->date }}
                                    </small>
                                </p>
                                <img src="{{ asset($news->image) }}" class="" alt="{{ $news->title_en }}"
                                    style="width:100%">
                                <p class="card-text mt-3">
                                    {{ app()->getLocale() == 'bn' ? $news->description_bn : $news->description_en }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-12 d-flex justify-content-center mb-2">
                            <div class="card" style="width: 100%;">

                                <h2 class="card-title text-center mt-2">
                                    {{ app()->getLocale() == 'bn' ? __('সর্বশেষ সংবাদ') : __('Latest News') }}</h2>

                            </div>
                        </div>
                        @foreach ($news_latest as $key => $item)
                            <div class="card shadow-sm mb-2">
                                <div class="card-body d-flex">
                                    <div class="col-md-2">
                                        <a href="{{ route('news.details', $item->id) }}"> <img
                                                src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                                class="img-fluid" style="height: 100%;"> </a>
                                    </div>
                                    <div class="col-md-10" style="margin-left:10px">
                                        <h5 class="card-title"><a href="{{ route('news.details', $item->id) }}">
                                                {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                            </a>
                                        </h5>
                                        <span class="card-text">
                                            <small class="text-muted">
                                                {{ app()->getLocale() == 'bn' ? __('তারিখ') : __('Date') }}:
                                                {{ $item->date }}
                                            </small>
                                        </span>
                                        <p class="card-text">
                                            {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                                            <a href="{{ route('news.details', $item->id) }}"><small>
                                                    {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
                            <a href="{{ route('news-page') }}" class="btn btn-primary"
                                style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>


    <!-- Blog End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#news").addClass('active');
        });
    </script>
@endsection
