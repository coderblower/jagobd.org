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
            <div class="text-center mt-3 mx-auto wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">

                @if ($siteSetting)
                    <h1>
                        {{ app()->getLocale() == 'bn' ? $siteSetting->notice_title_bn : $siteSetting->notice_title_en }}
                    </h1>
                @else
                    <p>No title available.</p>
                @endif
            </div>
            <div class="row justify-content-center">
                @foreach ($notice as $key => $item)
                    <div class="col-md-8 mx-auto">
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo"
                                    style="
          background-image: url({{ asset($item->image) }});
        ">
                                </div>
                                <ul class="details">
                                    <li class="date">
                                        {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}
                                    </li>
                                </ul>
                            </div>
                            <div class="description">
                                <h5><a href="{{ route('notice.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a></h5>
                                <p>
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 40) : Illuminate\Support\Str::limit($item->description_en, 40) }}
                                </p>

                                <h2 class="date d-flex justify-content-between" style="color: black">
                                    {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}

                                    <a href="{{ route('notice.details', $item->id) }}"
                                        class="text-primary d-flex justify-content-end"><small>
                                            {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <!-- Pagination Links -->
            @if ($notice->total() > 20)
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item{{ $notice->onFirstPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $notice->previousPageUrl() }}"
                                    tabindex="-1">{{ app()->getLocale() == 'bn' ? __('আগের পৃষ্ঠা যান') : __('Previous') }}</a>
                            </li>
                            @for ($i = 1; $i <= $notice->lastPage(); $i++)
                                <li class="page-item{{ $i == $notice->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $notice->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item{{ $notice->hasMorePages() ? '' : ' disabled' }}">
                                <a class="page-link"
                                    href="{{ $notice->nextPageUrl() }}">{{ app()->getLocale() == 'bn' ? __('পরবর্তী পৃষ্ঠা যান') : __('Next') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif --}}

        </div>
    </div>

    </div>
    </div>


    <!-- Blog End -->
 <div class="col-2 mx-auto">
    {!! $notice->links() !!}
</div>


@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#notice").addClass('active');
        });
    </script>
@endsection
