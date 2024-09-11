@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠন' : 'Affiliate Organization' }}</h1>
        </div>
    </div>

    <!-- Introduction Section Start -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2>{{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠনের ভূমিকা' : 'Role of Affiliate Organizations' }}</h2>
                <p class="lead mt-3">
                    {{ app()->getLocale() == 'bn' ? 'আমাদের পার্টির শক্তিশালী নেটওয়ার্ক তৈরি করতে সহযোগী সংগঠনগুলি গুরুত্বপূর্ণ ভূমিকা পালন করে।' : 'Affiliate organizations play a crucial role in building a strong network for our party.' }}
                </p>
            </div>
        </div>
    </div>
    <!-- Introduction Section End -->

    <!-- Affiliate Organizations Section Start -->
<div class="container my-5">
    <!-- Organization 1 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4">
            <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="Affiliate 1">
        </div>
        <div class="col-md-8">
            <h3>{{ app()->getLocale() == 'bn' ? 'সংগঠন ১' : 'Organization 1' }}</h3>
            <p>{{ app()->getLocale() == 'bn' ? 'সংক্ষিপ্ত বিবরণ ১' : 'Short Description 1' }}</p>
            <a href="#" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? 'বিস্তারিত' : 'Learn More' }}</a>
        </div>
    </div>
    <!-- Organization 2 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h3>{{ app()->getLocale() == 'bn' ? 'সংগঠন ২' : 'Organization 2' }}</h3>
            <p>{{ app()->getLocale() == 'bn' ? 'সংক্ষিপ্ত বিবরণ ২' : 'Short Description 2' }}</p>
            <a href="#" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? 'বিস্তারিত' : 'Learn More' }}</a>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="Affiliate 2">
        </div>
    </div>
    <!-- Organization 3 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4">
            <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="Affiliate 3">
        </div>
        <div class="col-md-8">
            <h3>{{ app()->getLocale() == 'bn' ? 'সংগঠন ৩' : 'Organization 3' }}</h3>
            <p>{{ app()->getLocale() == 'bn' ? 'সংক্ষিপ্ত বিবরণ ৩' : 'Short Description 3' }}</p>
            <a href="#" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? 'বিস্তারিত' : 'Learn More' }}</a>
        </div>
    </div>
    {{-- <!-- Organization 4 -->
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h3>{{ app()->getLocale() == 'bn' ? 'সংগঠন ৪' : 'Organization 4' }}</h3>
            <p>{{ app()->getLocale() == 'bn' ? 'সংক্ষিপ্ত বিবরণ ৪' : 'Short Description 4' }}</p>
            <a href="#" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? 'বিস্তারিত' : 'Learn More' }}</a>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="Affiliate 4">
        </div>
    </div> --}}
</div>
<!-- Affiliate Organizations Section End -->


    <!-- Call to Action Section Start -->
    <div class="container-fluid bg-primary text-white py-5">
        <div class="container text-center">
            <h2>{{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Get Involved' }}</h2>
            <p class="lead mt-3">
                {{ app()->getLocale() == 'bn' ? 'আপনি আমাদের সহযোগী সংগঠনগুলির সাথে যুক্ত হতে চান?' : 'Want to get involved with our affiliate organizations?' }}
            </p>
            <a href="{{ route('contact') }}"
                class="btn btn-light btn-lg">{{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Contact Us' }}</a>
        </div>
    </div>
    <!-- Call to Action Section End -->


@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
