@extends('front-end.layouts.master')
@section('title', 'All News')
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
                    <div class="col-lg-6 col-xl-4 mb-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset($item->image) }}" class="img-fluid w-100 rounded-top" alt="" />
                            <div class="blog-content position-relative px-3" style="margin-top: 30px">
                                <h5 class="">
                                    <a href="{{ route('news.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a>
                                </h5>
                                <p class="py-2" style="color: black">
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                                </p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border rounded-bottom"
                                style="background-color: #39b44b">
                                <small class="text-white">
                                    {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}</small>
                                <a href="{{ route('news.details', $item->id) }}" class="text-white"><small>
                                        {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            @if ($news->total() > 20)
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item{{ $news->onFirstPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $news->previousPageUrl() }}"
                                    tabindex="-1">{{ app()->getLocale() == 'bn' ? __('আগের পৃষ্ঠা যান') : __('Previous') }}</a>
                            </li>
                            @for ($i = 1; $i <= $news->lastPage(); $i++)
                                <li class="page-item{{ $i == $news->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $news->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item{{ $news->hasMorePages() ? '' : ' disabled' }}">
                                <a class="page-link"
                                    href="{{ $news->nextPageUrl() }}">{{ app()->getLocale() == 'bn' ? __('পরবর্তী পৃষ্ঠা যান') : __('Next') }}</a>
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
            $("#news").addClass('active');
        });
    </script>
@endsection
