@extends('front-end.layouts.master')
@section('title', 'All Eshowcase')
@section('content')
</br></br></br>
    <!-- Page Header Start -->
    <div class="container-fluid bg-primary text-white py-4">
        <div class="container text-center">
            <h1 class="display-4">
                {{ app()->getLocale() == 'bn' ? 'প্রাথমিক সদস্যপদের আবেদন' : 'Primary Membership Registration form' }}
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Eshowcase Start -->
    <div class="container-fluid bg-light eshowcase py-5">
        <div class="container">
            <div class="row mb-4">
                <h2 style="text-align: center">প্রাথমিক সদস্য ফরম  </h2>
            </div>
            <div class="row">
                <form action="primary-member" method="post" >
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                              <input type="text" id="form6Example1" placeholder="আবেদনকারীর নাম" name='name' class="form-control"  />
                              <label class="form-label" for="form6Example1"></label>
                            </div>
                          </div>
                    </div>

                    <div class="row mb-4">


                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="form6Example2" placeholder="পিতা/স্বামীর নাম" name="suppose Name" class="form-control" />
                        </div>
                      </div>

                      <div class="col form-outline">

                        <input type="text"  id="" placeholder="মাতার নাম" name="mothers name" class="form-control" />

                    </div>
                    </div>

                    <div class="row mb-4">

                        <!-- Text input -->


                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="ঠিকানা বর্তমান" name="present_address" class="form-control" />

                        </div>
                    </div>

                    <div class="row mb-4">

                        <!-- Text input -->


                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="স্থায়ী বর্তমান" name="parmanent_address" class="form-control" />

                        </div>

                    </div>

                    <div class="row mb-4">

                        <!-- Text input -->


                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="বয়স" name="age" class="form-control" />

                        </div>
                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="শিক্ষাগত যোগ্যতা" name="eductaion" class="form-control" />

                        </div>
                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="পেশা" name="work" class="form-control" />

                        </div>

                    </div>

                    <div class="row mb-4">
                        <div class="col form-outline">

                            <input type="number"  id="" placeholder="মোবাইল নং " name="mobile" class="form-control" />

                        </div>

                        <div class="col form-outline">

                            <input type="text"  id="" placeholder="ইমেল" name="email" class="form-control" />

                        </div>
                    </div>




                    <!-- Submit button -->
                    <div class="row mb-4">
                        <button  type="submit" class="btn btn-primary btn-block mb-4">সদস্যতা নিন </button>
                    </div>
                    @csrf
                  </form>


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
                if (data.success) {
                    alert('Item added to cart.');
                } else {
                    alert('Error adding item.');
                }
            });
        }
    </script>
    <script>
        function toggleCustomPriceInput() {
            const priceSelect = document.getElementById('price-range-select').value;
            const customPriceInputs = document.getElementById('custom-price-inputs');

            if (priceSelect === 'custom') {
                customPriceInputs.style.display = 'block';
            } else {
                customPriceInputs.style.display = 'none';
            }
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
    </script>
@endsection
