@extends('front-end.layouts.master')
@section('title', 'Home')
@section('content')

@include('front-end.pages.home.components.contact')
    <!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#home").addClass('active');
        });
    </script>
@endsection
