@extends('front-end.layouts.master')
@section('title')
    {{$dofa->title}}
@endsection
@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid">
        <div class="container text-center py-4"> --}}
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">News</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">News</li>
                </ol>
            </nav> --}}
        {{-- </div>
    </div> --}}
    <!-- Page Header End -->

    <style>
        .dofa-header-img {
            background-image: url({{asset($dofa['image-large'])}});

        }
        .dofa-header-img {

            background-position: center;
            background-size: cover;
        }

        .ql-align-justify span{
            font-size: 1.4rem;
        }

    </style>
    <div class="dofa-header-img" style="wdith:100%; height:300px">

    </div>

    <style>
        .onnanno{
            transition: all .5s ease;
        }
        .onnanno:hover{
            transform: scale(1.1)
        }
        ol {
            list-style:bengali;
            font-size: 1.5em;
            color:black;
        }
    </style>

    <!-- Blog Start -->
    <div class="container-fluid bg-light blog py-5">


        <div class="container">
            <div>
                <div class="row justify-content-center">
                    <div class="col-md-9 mb-2 mx-auto">
                        <div class="card shadow-sm">
                            <div class="card-body">

                                @if ($siteSetting)
                                <h2 class="card-title px-2 text-start  pt-5
                                " style="color:red; font-weight:bold; font-size:2.5rem;
                                ">
                                    {{$dofa->title}}
                                </h2>
                                @else
                                    <p>No title available.</p>
                                @endif
                                <p class="card-text">
                                    <small class="text-muted">

                                    </small>
                                </p>
                                <img src=""
                                    style="width:100%">
                                <p class="card-text mt-3">
                                    {!!$dofa->description!!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-5" style="position: relative">
                        <h2 class="
                        " style="font-size:2rem ">অন্যান্য দফাসমূহ</h2>
                        @foreach ($moreDofa as $key=>$item )
                            <div class="card onnanno p-4 d-flex  flex-column justify-content-center align-items-center mb-4">
                                <a href="{{route('dofa.details', $item->slug)}}">
                                    <div class="" style="width:100%; position: relative" >
                                        <img src="{{asset($item['image-mini'])}}" style="width:100%"  alt="">
                                    </div>
                                    <div style="">
                                        <h5>{{$item->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>





                    </div>
                </div>
            </div>
        </div>
        @include('front-end.pages.home.components.fancy_button')

    </div>

    </div>
    </div>


    <!-- Blog End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#news").addClass('active');
        });
    </script>
@endsection
