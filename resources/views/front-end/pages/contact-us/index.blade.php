@extends('front-end.layouts.master')
@section('title', 'Contact Us')
@section('content')
    <!-- Page Header Start -->

    <hr>
    <hr>
<hr><hr><hr><hr> <hr><hr>

     <!-- Contact Start -->
     @include('front-end.pages.home.components.contact')
     <!-- Contact End -->

    <!-- Contact End -->
@section('js')
    <script>
        $(document).ready(function() {
            $("#contact").addClass('active');
        });
    </script>
@endsection
