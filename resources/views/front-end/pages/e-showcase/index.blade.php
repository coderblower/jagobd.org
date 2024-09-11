@extends('front-end.layouts.master')
@section('title', 'All Eshowcase')
@section('content')

<script>
    function toggleCustomPriceInput() {
            var priceSelect = document.getElementById('price-range-select').value;
            priceSelect = priceSelect.split('-');
            let input1 = document.querySelector('#price_start')

            let input2 = document.querySelector('#price_end');

            input1.value = priceSelect[0];
            input2.value = priceSelect[1];

            const customPriceInputs = document.getElementById('custom-price-inputs');
            console.log(priceSelect, input1, input2);

            // if (priceSelect === 'custom') {
            //     customPriceInputs.style.display = 'block';
            // } else {
            //     customPriceInputs.style.display = 'none';
            // }
        }

</script>

</br></br></br>
    <!-- Page Header Start -->
    <div class="container-fluid bg-primary text-white py-4">
        <div class="container text-center">
            <h1 class="display-4">
                {{ app()->getLocale() == 'bn' ? 'ই-শোকেস' : 'E-Showcase' }}
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Eshowcase Start -->
    <div class="container-fluid bg-light eshowcase py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-3 col-md-4 mb-4">
                    <!-- Search Bar -->
                    <div class="mb-4 p-3 bg-white rounded shadow-sm">
                        <h5 class="font-weight-bold">{{ app()->getLocale() == 'bn' ? 'অনুসন্ধান' : 'Search' }}</h5>
                        <form action="#" method="GET">
                            <input type="text" name="search" class="form-control" placeholder="{{ app()->getLocale() == 'bn' ? 'পণ্য অনুসন্ধান করুন...' : 'Search Products...' }}" value="{{ request('search') }}">
                        </form>
                    </div>

                    <!-- Price Filter -->
                    <div class="mb-4 p-3 bg-white rounded shadow-sm">
                        <h5 class="font-weight-bold">{{ app()->getLocale() == 'bn' ? 'মূল্য ফিল্টার' : 'Price Filter' }}</h5>
                        <form action="" method="GET">
                            <!-- Predefined Price Ranges Dropdown -->
                            <select id="price-range-select" class="form-control mb-3" onchange="toggleCustomPriceInput(this)">
                                <option value="all">{{ app()->getLocale() == 'bn' ? 'সব মূল্য' : 'All Prices' }}</option>
                                <option value="0-100">৳0 - ৳1,00</option>
                                <option value="100-500">৳100 - ৳500</option>
                                <option value="500-1000">৳500 - ৳1000</option>
                                <option value="1001-2000">৳1000 - ৳2000</option>
                                <option value="custom">{{ app()->getLocale() == 'bn' ? 'কাস্টম পরিসীমা' : 'Custom Range' }}</option>
                            </select>

                            <input type="hidden" name="price_start" id="price_start" name="price_start" value="0">
                            <input type="hidden" name="price_end" id="price_end" type="number" value="0" >

                            <!-- Custom Price Input Fields -->
                            {{-- <div id="custom-price-inputs" style="display: none;">
                                <div class="form-group">
                                    <label for="price-start" class="font-weight-bold">{{ app()->getLocale() == 'bn' ? 'শুরু মূল্য' : 'Start Price' }}:</label>
                                    <input type="number" id="price-cus-start" name="price_start" class="form-control" placeholder="৳0">
                                </div>
                                <div class="form-group">
                                    <label for="price-end" class="font-weight-bold">{{ app()->getLocale() == 'bn' ? 'শেষ মূল্য' : 'End Price' }}:</label>
                                    <input type="number" id="price-cus-end" name="price_end" class="form-control" placeholder="৳5,000">
                                </div>
                            </div> --}}

                            <button type="submit" class="btn btn-primary btn-block">{{ app()->getLocale() == 'bn' ? 'ফিল্টার' : 'Filter' }}</button>
                        </form>
                    </div>

                    <!-- Category Filter -->
                    <div class="mb-4 p-3 bg-white rounded shadow-sm">
                        <h5 class="font-weight-bold">{{ app()->getLocale() == 'bn' ? 'বিভাগ' : 'Category' }}</h5>
                        <form action="#" method="GET">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="category1">
                                <label class="form-check-label" for="Book">
                                    {{ app()->getLocale() == 'bn' ? 'বই' : 'Book' }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="2" id="category2">
                                <label class="form-check-label" for="Antiques">
                                    {{ app()->getLocale() == 'bn' ? 'প্রাচীন জিনিসপত্র' : 'Antiques' }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="category3">
                                <label class="form-check-label" for="Electronics">
                                    {{ app()->getLocale() == 'bn' ? 'ইলেকট্রনিক্স' : 'Electronics' }}
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-2">{{ app()->getLocale() == 'bn' ? 'ফিল্টার প্রয়োগ করুন' : 'Apply Filters' }}</button>
                        </form>
                    </div>
                </div>
                <!-- Sidebar End -->

                <!-- Products Grid Start -->
                <div class="col-lg-9 col-md-8">
                    <!-- Top Product Filter Start -->
                    <div class="d-flex justify-content-end align-items-center mb-4">
                        <div class="d-flex align-items-center mr-3">
                            <label for="sort-by" class="mr-2 font-weight-bold">{{ app()->getLocale() == 'bn' ? 'ছক অনুসারে' : 'Sort By' }}:</label>
                            <select id="sort-by" class="custom-select" onchange="applySortAndPagination()">
                                <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>{{ app()->getLocale() == 'bn' ? 'নাম (এ-জেড)' : 'Name (A-Z)' }}</option>
                                <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>{{ app()->getLocale() == 'bn' ? 'নাম (জেড-এ)' : 'Name (Z-A)' }}</option>
                                <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>{{ app()->getLocale() == 'bn' ? 'মূল্য (নিম্ন থেকে উচ্চ)' : 'Price (Low to High)' }}</option>
                                <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>{{ app()->getLocale() == 'bn' ? 'মূল্য (উচ্চ থেকে নিম্ন)' : 'Price (High to Low)' }}</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center">
                            <label for="per-page" class="mr-2 font-weight-bold">{{ app()->getLocale() == 'bn' ? 'প্রতি পৃষ্ঠা' : 'Show' }}:</label>
                            <select id="per-page" class="custom-select" onchange="applySortAndPagination()">
                                <option value="12" {{ request('per_page') == '12' ? 'selected' : '' }}>12</option>
                                <option value="24" {{ request('per_page') == '24' ? 'selected' : '' }}>24</option>
                                <option value="48" {{ request('per_page') == '48' ? 'selected' : '' }}>48</option>
                            </select>
                        </div>
                        <!-- Cart Icon with Badge -->
                        <div class="d-flex justify-content-end align-items-center py-2">
                            <a href="{{ route('cart.view') }}" class="text-green position-relative ml-4">
                                <i class="fas fa-shopping-cart fa-2x"></i>
                                <span id="cart-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $cartCount }}
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Top Product Filter End -->


                    <div class="container my-4">
                        <div class="row">
                            @foreach ($eshowcase as $item)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                    <div class="card border-0 rounded shadow-sm h-100">
                                        <a href="{{ route('e_showcase.details', $item->id) }}">
                                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->name_en }}" style="height: 200px; object-fit: cover;">
                                        </a>
                                        <div class="card-body d-flex flex-column p-3">
                                            <h5 class="card-title text-dark font-weight-bold mb-2">
                                                <a href="{{ route('e_showcase.details', $item->id) }}" class="text-decoration-none text-dark">
                                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                                </a>
                                            </h5>
                                            <p class="card-text text-muted mb-2">
                                                {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 20) : Illuminate\Support\Str::limit($item->description_en, 20) }}
                                            </p>
                                            {{-- <div class="profile-info mb-2 d-flex align-items-center">
                                                @if ($item->profile_photo)
                                                    <img src="{{ asset('storage/' . $item->profile_photo) }}" class="rounded-circle profile-img mr-2" alt="Photo">
                                                @else
                                                    <div class="rounded-circle profile-img-placeholder d-flex justify-content-center align-items-center text-muted mr-2">
                                                        <i class="fas fa-user-circle fa-2x"></i>
                                                    </div>
                                                @endif
                                                <div>
                                                    <p class="m-0 text-muted">
                                                        <strong>@lang('Name'):</strong> {{ app()->getLocale() == 'bn' ? $item->user_name_bn : $item->user_name_en }}
                                                    </p>
                                                    <p class="m-0 text-muted">
                                                        <strong>@lang('Committee'):</strong> {{ app()->getLocale() == 'bn' ? $item->committee_name_bn : $item->committee_name_en }}
                                                    </p>
                                                    <p class="m-0 text-muted">
                                                        <strong>@lang('Position'):</strong> {{ app()->getLocale() == 'bn' ? $item->position_name_bn : $item->position_name_en }}
                                                    </p>
                                                </div>
                                            </div> --}}
                                            <div class="mb-3">
                                                <p class="card-text text-primary font-weight-bold">
                                                    {{ app()->getLocale() == 'bn' ? '৳' . number_format($item->price, 2) : '৳' . number_format($item->price, 2) }}
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                                {{-- <a href="#" class="btn btn-outline-secondary btn-sm">@lang('Add to Cart')</a> --}}
                                                {{-- <form action="{{ route('cart.add', $item->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                                                        @lang('Add to Cart')
                                                    </button>
                                                </form>   <!-- Add to Cart Button --> --}}
                                                <button class="btn btn-outline-secondary btn-sm" onclick="addToCart({{ $item->id }})">
                                                    {{ __('Add to Cart') }}
                                                </button>

                                                {{-- <a href="{{ route('exampleAddToCart', $item->id) }}" class="btn btn-outline-secondary btn-sm">@lang('Add to Cart')</a> --}}
                                                <a href="#" class="btn btn-primary btn-sm">@lang('Buy Now')</a>
                                                {{-- <a href="{{ route('exampleEasyCheckout') }}" class="btn btn-primary btn-sm">@lang('Buy Now')</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>



                    <!-- Pagination Links -->
                    @if ($eshowcase->total() > 12)
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
                <!-- Products Grid End -->
            </div>
        </div>
    </div>
    <!-- Eshowcase End -->
@endsection

@section('styles')
    <style>
        /* General Styles */
        body {
            background-color: #f8f9fa;
        }

        .container-fluid.bg-primary {
            background-image: linear-gradient(120deg, #2980b9, #8e44ad);
        }

        .card {
            transition: transform 0.3s ease;
            border: none;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #666;
            flex-grow: 1;
        }

        .profile-info {
            display: flex;
            align-items: center;
            font-size: 14px;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-img-placeholder {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
        }

        .btn-primary {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-primary:hover {
            background-color: #1c6ea4;
            border-color: #1c6ea4;
        }

        /* Sidebar Styles */
        .bg-white.rounded.shadow-sm {
            padding: 15px;
            margin-bottom: 20px;
        }

        .form-check-label {
            cursor: pointer;
        }

        /* Styles for sort and pagination select boxes */
        .custom-select {
            width: auto;
            display: inline-block;
        }

        /* Price Slider */
        #price-slider {
            margin-top: 15px;
        }
    </style>
@endsection

@section('js')
    <script>


        function addToCart(id) {
            fetch(`/cart/add/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            }).then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.success) {
                    toastr.success("product added successfully ");
                } else {
                    toastr.error('Product could not be send ! please try again');
                }
                $('#cart-count').html(data.cart_added_number);
            });
        }


        $(document).ready(function() {
            $("#eshowcase").addClass('active');

            // Initialize the price range slider (static example)
            $("#price-slider").slider({
                range: true,
                min: 0,
                max: 5000,
                values: [500, 3000],
                slide: function(event, ui) {
                    $("#price-range").val("৳" + ui.values[0] + " - ৳" + ui.values[1]);
                }
            });
            $("#price-range").val("৳" + $("#price-slider").slider("values", 0) + " - ৳" + $("#price-slider").slider("values", 1));

            // Function to apply sorting and pagination
            window.applySortAndPagination = function() {
                const sortBy = $('#sort-by').val();
                const perPage = $('#per-page').val();
                const urlParams = new URLSearchParams(window.location.search);

                if (sortBy) {
                    urlParams.set('sort', sortBy);
                }
                if (perPage) {
                    urlParams.set('per_page', perPage);
                }

                window.location.search = urlParams.toString();
            };
        });


        $.ajax({
                type: "DELETE",
                url: url.replace(':id', id),
                success: function (resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);
                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function (error) {
                    location.reload();
                } // Error
            })


    </script>
@endsection
