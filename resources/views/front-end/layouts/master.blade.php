<!doctype html>
<html lang="bn">

<head>
    <title>@yield('title') || BNM</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    {{-- All Css  --}}
    @include('front-end.layouts.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-transform: capitalize;
            font-family: {{ app()->getLocale() == 'bn' ? 'Noto Serif Bengali, sans-serif' : 'Roboto Condensed, sans-serif' }};
        }

        small {
            text-transform: capitalize;
            font-family: {{ app()->getLocale() == 'bn' ? 'Noto Serif Bengali, sans-serif' : 'Roboto Condensed, sans-serif' }};
        }

        p {
            font-family: {{ app()->getLocale() == 'bn' ? 'Noto Serif Bengali, sans-serif' : 'Roboto Condensed, sans-serif' }};
        }

        body {
            font-family: {{ app()->getLocale() == 'bn' ? 'Noto Serif Bengali, sans-serif' : 'Roboto Condensed, sans-serif' }};
        }

        .slider h6 {
            padding: 6px;
            color: white;
            margin: 10px 0;
        }

        .slider .slick-prev:before,
        .slider .slick-next:before {
            color: white;
        }


        .ticker {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            height: 50px;
            margin: -7px auto;
            /* position: fixed;
            bottom: 0px; */
            right: 0px;
            z-index: 20;
        }

        .news {
            width: 100%;
            background: #fff;
            box-shadow:0 2px 4px rgb(91 94 91 / 70%)
        }

        .news-title {
            width: 200px;
            text-align: center;
            background: #e82629;
            position: absolute;
            z-index: 10;
        }

        .news-title:after {
            position: absolute;
            content: "";
            right: -39px;
            top: 0px;
        }

        .news-title h5 {
            font-size: 20px;
            margin: 8% 0;
            color: #fff;
        }

        .news marquee {
            font-size: 20px;
            margin-top: 10px;
            width: 90%;
            float: right;
        }

        .news-content p {
            margin-right: 15px;
            display: inline;
            color: #222;
        }

        @media only screen and (max-width: 600px) {
            .news-title {
                width: 106px;
                text-align: center;
                background: #e82629;
                position: absolute;
                z-index: 10;
            }

            .news-title h5 {
                font-size: 20px;
                margin: 15% 0;
                color: #fff;
            }
        }
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('front-end.layouts.nav')
    <!-- Navbar End -->
    @yield('content')



    <!-- Footer Start -->
    @include('front-end.layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-square rounded-circle back-to-top"
        style="background-color: #e82629; border-color: #e82629"><i class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    @include('front-end.layouts.js')
    @yield('js')
</body>

</html>
