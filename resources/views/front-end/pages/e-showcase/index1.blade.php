@extends('front-end.layouts.master')
@section('title', 'All Eshowcase')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
            ই-শোকেস
            @else
            E-Showcase
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Eshowcase Start -->
<div class="container-fluid bg-light eshowcase py-5">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($eshowcase as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 wow fadeIn" data-wow-delay=".3s">
                <div class="card shadow-sm border-0 rounded">
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name_en }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}</h5>
                        <p class="card-text text-muted">
                            {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 70) : Illuminate\Support\Str::limit($item->description_en, 70) }}
                        </p>
                        <div class="profile-info d-flex align-items-center">
                            @if ($item->profile_photo)
                            <img src="{{ asset('storage/' . $item->profile_photo) }}" class="rounded-circle profile-img" alt="Profile Photo">
                            @else
                            <div class="rounded-circle profile-img-placeholder d-flex justify-content-center align-items-center text-muted">
                                <i class="fas fa-user"></i> <!-- Font Awesome icon -->
                            </div>
                            @endif
                            <div class="ml-2">
                                <p class="mb-0">
                                    <strong>{{ __('Name') }}:</strong>
                                    {{ app()->getLocale() == 'bn' ? $item->user_name_bn : $item->user_name_en }}
                                </p>
                                <p class="mb-0 text-muted small">
                                    <strong>{{ __('Committee') }}:</strong>
                                    {{ app()->getLocale() == 'bn' ? $item->committee_name_bn : $item->committee_name_en }}
                                </p>
                                <p class="mb-0 text-muted small">
                                    <strong>{{ __('Position') }}:</strong>
                                    {{ app()->getLocale() == 'bn' ? $item->position_name_bn : $item->position_name_en }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer bg-transparent border-0">
                        <div class="text-center">
                            <a href="{{ route('exampleEasyCheckout') }}" class="btn btn-sm btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination Links -->
        @if ($eshowcase->total() > 12) <!-- Adjust based on number of cards per row -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item{{ $eshowcase->onFirstPage() ? ' disabled' : '' }}">
                        <a class="page-link" href="{{ $eshowcase->previousPageUrl() }}" tabindex="-1">{{ __('Previous') }}</a>
                    </li>
                    @for ($i = 1; $i <= $eshowcase->lastPage(); $i++)
                    <li class="page-item{{ $i == $eshowcase->currentPage() ? ' active' : '' }}">
                        <a class="page-link" href="{{ $eshowcase->url($i) }}">{{ $i }}</a>
                    </li>
                    @endfor
                    <li class="page-item{{ $eshowcase->hasMorePages() ? '' : ' disabled' }}">
                        <a class="page-link" href="{{ $eshowcase->nextPageUrl() }}">{{ __('Next') }}</a>
                    </li>
                </ul>
            </nav>
        </div>
        @endif
    </div>
</div>
<!-- Eshowcase End -->
@endsection

@section('styles')
<style>
    .card {
        transition: transform 0.3s ease;
        border: none;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        height: 200px;
        object-fit: cover;
    }

    .card-title {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 14px;
        color: #666;
    }

    .profile-info {
        font-size: 12px;
        color: #666;
    }

    .profile-img {
        width: 30px;
        height: 30px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile-img-placeholder {
        width: 30px;
        height: 30px;
        background-color: #ddd;
        border-radius: 50%;
        margin-right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-img-placeholder i {
        font-size: 18px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 12px;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#eshowcase").addClass('active');
    });
</script>
@endsection
