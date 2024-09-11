@extends('front-end.layouts.master')
@section('title', 'Disaster')
@section('content')

</br></br></br>
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
                দুর্যোগ
            @else
                Disaster
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Content Start -->
<div class="container my-5">
    <div class="row g-4 d-flex align-items-center">
        <!-- Left Side: Image -->
        <div class="col-md-6">
            <div class="image-container" style="border: 5px solid #ddd; border-radius: 10px; padding: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <img src="{{ asset('uploads/flood.webp') }}" class="img-fluid rounded" alt="Person Image" style="width: 100%; height: auto; display: block;">
            </div>
        </div>
        <!-- Right Side: Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        @if (app()->getLocale() == 'bn')
                        আবেদন ফর্ম পূরণ করুন
                        @else
                            Fill the Application Form
                        @endif
                    </h5>
                    <form action="{{ route('personandfamily') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">@if (app()->getLocale() == 'bn') নাম @else Name @endif</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="@if (app()->getLocale() == 'bn') ঐচ্ছিক @else Optional @endif">
                        </div>
                        <div class="mb-3">
                            <label for="member_id" class="form-label">@if (app()->getLocale() == 'bn') সদস্য আইডি @else Member ID @endif</label>
                            <input type="text" class="form-control" id="member_id" name="member_id" placeholder="@if (app()->getLocale() == 'bn') ঐচ্ছিক @else Optional @endif">
                        </div>
                        <div class="mb-3">
                            <label for="reason" class="form-label">@if (app()->getLocale() == 'bn') কারণ @else Reason @endif</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="expected_amount" class="form-label">
                                @if (app()->getLocale() == 'bn')
                                    প্রত্যাশিত পরিমাণ
                                @else
                                    Expected Amount
                                @endif
                            </label>
                            <input type="number" class="form-control" id="expected_amount" name="expected_amount" placeholder="@if (app()->getLocale() == 'bn') প্রত্যাশিত পরিমাণ @else Enter expected amount @endif"required>
                        </div>                        
                        <div class="mb-3">
                            <label for="document_image" class="form-label">@if (app()->getLocale() == 'bn') ডকুমেন্ট ইমেজ @else Document Image @endif</label>
                            <input type="file" class="form-control" id="document_image" name="document_image" required>
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
