@extends('front-end.layouts.master')
@section('title', 'Programs & PressReleases')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-4">
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">video</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">video</li>
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
                    {{ app()->getLocale() == 'bn' ? $siteSetting->program_subtitle_bn : $siteSetting->program_subtitle_en }}
                </h5>
                @else
                    <p>No subtitle available.</p>
                @endif

                @if ($siteSetting)
                <h1>
                    {{ app()->getLocale() == 'bn' ? $siteSetting->program_title_bn : $siteSetting->program_title_en }}
                </h1>
                @else
                    <p>No title available.</p>
                @endif
                
            </div>
            <div class="row g-3 justify-content-center">
                @foreach ($program as $key => $item)
                    <div class="col-md-6">
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
                                <h5><a href="{{ route('program.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a></h5>

                                <h2 class="date" style="color: black">
                                    {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}
                                </h2>
                                <p style="color: black">
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 100) : Illuminate\Support\Str::limit($item->description_en, 100) }}
                                </p>
                                <p class="read-more">
                                    <a href="{{ route('program.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            @if ($program->total() > 20)
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item{{ $program->onFirstPage() ? ' disabled' : '' }}">
                                <a class="page-link" href="{{ $program->previousPageUrl() }}"
                                    tabindex="-1">{{ app()->getLocale() == 'bn' ? __('আগের পৃষ্ঠা যান') : __('Previous') }}</a>
                            </li>
                            @for ($i = 1; $i <= $program->lastPage(); $i++)
                                <li class="page-item{{ $i == $program->currentPage() ? ' active' : '' }}">
                                    <a class="page-link" href="{{ $program->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item{{ $program->hasMorePages() ? '' : ' disabled' }}">
                                <a class="page-link"
                                    href="{{ $program->nextPageUrl() }}">{{ app()->getLocale() == 'bn' ? __('পরবর্তী পৃষ্ঠা যান') : __('Next') }}</a>
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
            $("#video").addClass('active');
        });
    </script>
@endsection
