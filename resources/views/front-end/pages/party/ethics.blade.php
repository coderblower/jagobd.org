@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'নীতিআদর্শ' : 'Ethics' }}</h1>
        </div>
    </div>

    <!-- Ethics Section Start -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="ethics-box p-4 bg-light text-center shadow-sm">
                    <h4>{{ app()->getLocale() == 'bn' ? 'নৈতিকতা' : 'Ethic' }}</h4>
                    <p>{{ app()->getLocale() == 'bn' ? 'বর্ণনা' : 'Description' }}</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="ethics-box p-4 bg-light text-center shadow-sm">
                    <h4>{{ app()->getLocale() == 'bn' ? 'নৈতিকতা ' : 'Ethic' }}</h4>
                    <p>{{ app()->getLocale() == 'bn' ? 'বর্ণনা' : 'Description' }}</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="ethics-box p-4 bg-light text-center shadow-sm">
                    <h4>{{ app()->getLocale() == 'bn' ? 'নৈতিকতা ' : 'Ethic ' }}</h4>
                    <p>{{ app()->getLocale() == 'bn' ? 'বর্ণনা ' : 'Description ' }}</p>
                </div>
            </div>
            <!-- Add more ethics boxes as needed -->
        </div>
    </div>
    <!-- Ethics Section End -->



@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
