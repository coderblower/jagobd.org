@extends('front-end.layouts.master')
@section('title', 'Gallery')
@section('content')
    <style>
        .gallery-box {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .box {
            width: calc(33.333% - 10px);
            position: relative;
        }

        .box img {
            width: 100%;
            display: block;
            border-radius: 5px 5px 0px 0px;
        }

        .box h2 {
            position: absolute;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            margin: 0;
            padding: 5px;
            text-align: center;
            font-size: 1em;
            border-radius: 0px 0px 5px 5px;
        }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid">
        <div class="container text-center py-4">
            {{-- <h1 class="display-2 text-white mb-4 animated slideInDown">Gallery</h1> --}}
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Gallery</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->

    <div class="gallery-section mt-5 mb-5">
        <div class="container mt-2">
            <h2 class="text-center mb-4">{{ app()->getLocale() == 'bn' ? __('গ্যালারি ফটোস') : __('Gallery Photos') }}</h2>
            <div class="gallery-box">
                @foreach ($gallery_image as $key => $item)
                    <div class="box gap-2">
                        <a href="{{ asset($item->image) }}" data-fancybox="gallery1" title="Gallery Image">
                            <img src="{{ asset($item->image) }}" class="img-fluid" alt="Gallery Image">
                            
                        </a>
                        <h2>{{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                        </h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#gallery").addClass('active');
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>

@endsection
