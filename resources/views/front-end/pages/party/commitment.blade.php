@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'অঙ্গীকার' : 'Commitment' }}</h1>
        </div>
    </div>




@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
