@extends('front-end.layouts.master')
@section('title')
    {{ app()->getLocale() == 'bn' ? $eshowcase->name_bn : $eshowcase->name_en }}
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-4">
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">Eshowcase</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Eshowcase</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Eshowcase Start -->
    <div class="container-fluid bg-light eshowcase py-5">
        <div class="container">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                @if ($siteSetting)
                                    <h2 class="card-title">
                                        {{ app()->getLocale() == 'bn' ? $eshowcase->name_bn : $eshowcase->name_en }}
                                    </h2>
                                @else
                                    <p>No title available.</p>
                                @endif
                                <p class="card-text">
                                    <small class="text-muted">
                                        {{ app()->getLocale() == 'bn' ? __('তারিখ') : __('Date') }}: {{ $eshowcase->created_at }}
                                    </small>
                                </p>
                                <div class="d-flex">
                                    <div class="flex-shrink-0" style="width: 150px; margin-right: 20px; margin-top: 20px;">
                                        <img src="{{ asset('storage/' . $eshowcase->image) }}" class="img-fluid" alt="{{ $eshowcase->name_en }}">
                                        <p class="mt-2">
                                            <strong>{{ app()->getLocale() == 'bn' ? __('মূল্য') : __('Price') }}:</strong> {{ $eshowcase->price }}<br>
                                            <strong>{{ app()->getLocale() == 'bn' ? __('লেখক') : __('Author') }}:</strong> {{ app()->getLocale() == 'bn' ? (($eshowcase->user_name_bn)) : (( $eshowcase->user_name_en)) }}:
                                        </p>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="card-text mt-3">
                                            {{ app()->getLocale() == 'bn' ? $eshowcase->description_bn : $eshowcase->description_en }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <div class="text-center">
                                    <a href="{{ route('exampleEasyCheckout') }}" class="btn btn-sm btn-primary">{{ app()->getLocale() == 'bn' ? __('ক্রয় করুন') : __('Buy Now') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-12 d-flex justify-content-center mb-2">
                            <div class="card" style="width: 100%;">
                                <h2 class="card-title text-center mt-2">
                                    {{ app()->getLocale() == 'bn' ? __('সর্বশেষ ই-শোকেস') : __('Latest Eshowcases') }}
                                </h2>
                            </div>
                        </div>
                        @foreach ($latestEshowcases as $latestItem)
                            <div class="card shadow-sm mb-2">
                                <div class="card-body d-flex">
                                    <div class="col-md-3">
                                        <a href="{{ route('e_showcase.details', $latestItem->id) }}">
                                            <img src="{{ asset('storage/' . $latestItem->image) }}" alt="{{ $latestItem->name_en }}" class="img-fluid" style="height: 100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-9" style="margin-left:10px">
                                        <h5 class="card-title">
                                            <a href="{{ route('e_showcase.details', $latestItem->id) }}">
                                                {{ app()->getLocale() == 'bn' ? $latestItem->name_bn : $latestItem->name_en }}
                                            </a>
                                        </h5>
                                        <span class="card-text">
                                            <small class="text-muted">
                                                {{ app()->getLocale() == 'bn' ? __('তারিখ') : __('Date') }}:
                                                {{ $latestItem->created_at }}
                                            </small>
                                        </span>
                                        <p class="card-text">
                                            {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($latestItem->description_bn, 100) : Illuminate\Support\Str::limit($latestItem->description_en, 100) }}
                                            <a href="{{ route('e_showcase.details', $latestItem->id) }}"><small>{{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
                            <a href="{{ route('e_showcase') }}" class="btn btn-primary" style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Eshowcase End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#eshowcase").addClass('active');
        });
    </script>
@endsection
