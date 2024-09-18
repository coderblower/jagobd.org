@extends('front-end.layouts.master')
@section('title', 'Contact Us')
@section('content')
    <!-- Page Header Start -->


    @include('front-end.pages.home.components.dofa')

     <!-- Contact Start -->
     @include('front-end.pages.home.components.contact')
     <!-- Contact End -->

    <!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#contact").addClass('active');
        });
    </script>
@endsection
