@extends('front-end.layouts.master')
@section('title', 'Charity Dinner')
@section('content')

</br></br></br>
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
                চ্যারিটি ডিনার
            @else
                Charity Dinner
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->
<!-- Content Start -->
<div class="container my-5">
    <div class="row g-4">
        <!-- Left Side: List of Events -->
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    @if (app()->getLocale() == 'bn')
                        ইভেন্টের তালিকা
                    @else
                        List of Events
                    @endif
                </div>
                <div class="card-body">
                    <!-- Example Event -->
                    <div class="event-item mb-4 d-flex align-items-start">
                        <div class="event-details flex-fill me-3">
                            <h5 class="event-title">@if (app()->getLocale() == 'bn') ইভেন্ট ১ @else Event 1 @endif</h5>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') তারিখ: @else Date: @endif</strong> 15th August 2024</p>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') স্থান: @else Venue: @endif</strong> Grand Hall</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') বিবরণ: @else Description: @endif</strong> Charity dinner to support local charities.</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') অতিথিরা: @else Guests: @endif</strong></p>
                            <div class="guests-list d-flex flex-wrap mb-3">
                                <span class="badge bg-secondary me-2 mb-2">Chef</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 1</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 2</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 3</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0"><strong>@if (app()->getLocale() == 'bn') প্রতি সিটের মূল্য: @else Per Seat Price: @endif</strong> $50</p>
                                <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') সিট বুক করুন @else Book Seat @endif</a>
                            </div>
                        </div>
                        <div class="event-image flex-shrink-0">
                            <img src="{{ asset('uploads-image/about-items/dinner1.jpg') }}" alt="Venue Image" class="img-fluid rounded fixed-image-size">
                        </div>
                    </div>
                    <div class="event-item mb-4 d-flex align-items-start">
                        <div class="event-details flex-fill me-3">
                            <h5 class="event-title">@if (app()->getLocale() == 'bn') ইভেন্ট ১ @else Event 1 @endif</h5>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') তারিখ: @else Date: @endif</strong> 15th August 2024</p>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') স্থান: @else Venue: @endif</strong> Grand Hall</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') বিবরণ: @else Description: @endif</strong> Charity dinner to support local charities.</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') অতিথিরা: @else Guests: @endif</strong></p>
                            <div class="guests-list d-flex flex-wrap mb-3">
                                <span class="badge bg-secondary me-2 mb-2">Chef</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 1</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 2</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 3</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0"><strong>@if (app()->getLocale() == 'bn') প্রতি সিটের মূল্য: @else Per Seat Price: @endif</strong> $50</p>
                                <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') সিট বুক করুন @else Book Seat @endif</a>
                            </div>
                        </div>
                        <div class="event-image flex-shrink-0">
                            <img src="{{ asset('uploads-image/about-items/dinner3.jpg') }}" alt="Venue Image" class="img-fluid rounded fixed-image-size">
                        </div>
                    </div>
                    <div class="event-item mb-4 d-flex align-items-start">
                        <div class="event-details flex-fill me-3">
                            <h5 class="event-title">@if (app()->getLocale() == 'bn') ইভেন্ট ১ @else Event 1 @endif</h5>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') তারিখ: @else Date: @endif</strong> 15th August 2024</p>
                            <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') স্থান: @else Venue: @endif</strong> Grand Hall</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') বিবরণ: @else Description: @endif</strong> Charity dinner to support local charities.</p>
                            <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') অতিথিরা: @else Guests: @endif</strong></p>
                            <div class="guests-list d-flex flex-wrap mb-3">
                                <span class="badge bg-secondary me-2 mb-2">Chef</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 1</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 2</span>
                                <span class="badge bg-secondary me-2 mb-2">Guest 3</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0"><strong>@if (app()->getLocale() == 'bn') প্রতি সিটের মূল্য: @else Per Seat Price: @endif</strong> $50</p>
                                <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') সিট বুক করুন @else Book Seat @endif</a>
                            </div>
                        </div>
                        <div class="event-image flex-shrink-0">
                            <img src="{{ asset('uploads-image/about-items/dinner2.webp') }}" alt="Venue Image" class="img-fluid rounded fixed-image-size">
                        </div>
                    </div>
                    <!-- Repeat for other events -->
                    <!-- Pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">@if (app()->getLocale() == 'bn') পূর্ববর্তী @else Previous @endif</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">@if (app()->getLocale() == 'bn') পরবর্তী @else Next @endif</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <style>
            .event-item {
                border: 1px solid #ddd;
                border-radius: 0.375rem;
                overflow: hidden;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
        
            .event-details {
                padding: 1rem;
                flex: 1;
            }
        
            .event-title {
                font-size: 1.25rem;
                margin-bottom: 0.5rem;
            }
        
            .event-image {
                flex-shrink: 0;
                margin: 5px;
            }
        
            .fixed-image-size {
                height: 150px;
                width: 150px;
                object-fit: cover;
            }
        
            .guests-list .badge {
                margin-right: 0.5rem;
                margin-bottom: 0.5rem;
            }
            
            @media (max-width: 768px) {
                .event-item {
                    flex-direction: column;
                }
        
                .event-image {
                    margin-top: 1rem;
                    width: 100%;
                }
        
                .fixed-image-size {
                    height: auto;
                    width: 100%;
                }
            }
        </style>



        <!-- Right Side: Create Event Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        @if (app()->getLocale() == 'bn')
                            নতুন ইভেন্ট তৈরি করুন
                        @else
                            Create New Event
                        @endif
                    </h5>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="event_name" class="form-label">@if (app()->getLocale() == 'bn') ইভেন্টের নাম @else Event Name @endif</label>
                            <input type="text" class="form-control" id="event_name" name="event_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="event_date" class="form-label">@if (app()->getLocale() == 'bn') তারিখ @else Date @endif</label>
                            <input type="date" class="form-control" id="event_date" name="event_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="venue" class="form-label">@if (app()->getLocale() == 'bn') স্থান @else Venue @endif</label>
                            <input type="text" class="form-control" id="venue" name="venue" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">@if (app()->getLocale() == 'bn') বিবরণ @else Description @endif</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="venue_image" class="form-label">@if (app()->getLocale() == 'bn') স্থান ছবি @else venue Image @endif</label>
                            <input type="file" class="form-control" id="event_image" name="event_image">
                        </div>
                        <div class="mb-3">
                            <label for="per_seat_price" class="form-label">@if (app()->getLocale() == 'bn') প্রতি সিটের মূল্য @else Per Seat Price @endif</label>
                            <input type="number" class="form-control" id="per_seat_price" name="per_seat_price" min="0" step="0.01" placeholder="$50" required>
                        </div>                        
                        <div class="mb-3">
                            <label for="chief_guest" class="form-label">@if (app()->getLocale() == 'bn') প্রধান অতিথি @else Chief Guest @endif</label>
                            <input type="text" class="form-control" id="chief_guest" name="chief_guest">
                        </div>
                        <div class="mb-3">
                            <label for="guest_1" class="form-label">@if (app()->getLocale() == 'bn') অতিথি ১ @else Guest 1 @endif</label>
                            <input type="text" class="form-control" id="guest_1" name="guest_1">
                        </div>
                        <div class="mb-3">
                            <label for="guest_2" class="form-label">@if (app()->getLocale() == 'bn') অতিথি ২ @else Guest 2 @endif</label>
                            <input type="text" class="form-control" id="guest_2" name="guest_2">
                        </div>
                        <div class="mb-3">
                            <label for="guest_3" class="form-label">@if (app()->getLocale() == 'bn') অতিথি ৩ @else Guest 3 @endif</label>
                            <input type="text" class="form-control" id="guest_3" name="guest_3">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">@if (app()->getLocale() == 'bn') জমা দিন @else Submit @endif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#about").addClass('active');
        });
    </script>
@endsection
