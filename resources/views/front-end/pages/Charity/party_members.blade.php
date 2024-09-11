@extends('front-end.layouts.master')
@section('title', 'About Us')
@section('content')

</br></br></br>
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
                ই-শোকেস
            @else
                E-Showcase
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->


@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#about").addClass('active');
        });
    </script>
@endsection
