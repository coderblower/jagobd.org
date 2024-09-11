@extends('front-end.layouts.master')
@section('title', 'Donate')
@section('content')
<br>
<br>
<br>
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
                দান করুন
            @else
                Donate
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Donation Information Section Start -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h2 class="text-center">
                @if (app()->getLocale() == 'bn')
                    আপনার উদার অবদান আমাদেরকে সাহায্য করতে সহায়ক হবে
                @else
                    Your Generous Contribution Helps Us Make a Difference
                @endif
            </h2>
            <p class="text-center mt-4">
                @if (app()->getLocale() == 'bn')
                    আমরা আমাদের সমাজের সেবা এবং সাহায্যকার্য চালিয়ে যেতে পারি শুধুমাত্র আপনার অনুদানের মাধ্যমে। আপনার ছোট্ট অনুদানও আমাদের প্রচেষ্টাকে এগিয়ে নিয়ে যেতে সাহায্য করে। আমাদের সাথে যুক্ত হয়ে দান করুন এবং সবার জন্য আরও ভালো ভবিষ্যত নির্মাণে সহায়তা করুন।
                @else
                    We can only continue our service and aid efforts in the community with your donations. Even a small contribution helps further our efforts. Join us in donating and help build a better future for everyone.
                @endif
            </p>
            <div class="text-center mt-5">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    @if (app()->getLocale() == 'bn')
                        এখনই দান করুন
                    @else
                        Donate Now
                    @endif
                </button>


                <!-- Button trigger modal -->


            <x-PaymentModal targetId="#exampleModalCenter" />



            </div>


        </div>
    </div>
</div>
<!-- Donation Information Section End -->

<!-- Impact Section Start -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/500" alt="Impact Image" class="img-fluid rounded">
        </div>
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h2 class="text-black">
                @if (app()->getLocale() == 'bn')
                    আপনার দান কোথায় যাবে?
                @else
                    Where Will Your Donation Go?
                @endif
            </h2>
            <p>
                @if (app()->getLocale() == 'bn')
                    আপনার দান গরীব এবং অসহায়দের সাহায্য করবে, শিক্ষার প্রসারে সহায়তা করবে, স্বাস্থ্যসেবা প্রদান করবে এবং আরও অনেক কার্যক্রমকে সমর্থন করবে।
                @else
                    Your donation will help the poor and needy, support educational programs, provide healthcare, and much more.
                @endif
            </p>
            <ul>
                <li>@if (app()->getLocale() == 'bn') গরীবদের জন্য খাদ্য সহায়তা @else Food Assistance for the Needy @endif</li>
                <li>@if (app()->getLocale() == 'bn') স্বাস্থ্যসেবা প্রদান @else Healthcare Provision @endif</li>
                <li>@if (app()->getLocale() == 'bn') শিক্ষার প্রসার @else Educational Support @endif</li>
            </ul>
        </div>
    </div>
</div>
<!-- Impact Section End -->

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#donate").addClass('active');
        });
    </script>
@endsection
