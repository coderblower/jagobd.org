@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')

<style>

    .modal-content{
        height: 100%;
        border-radius: 0;
        width: 173%;
        padding: 0;
        left: -173px;
        top: -26px;
    }

    .modal-body{
        padding:0;
    }

     .modal-dialog {
        width: 100%;
        height: 100%;
        padding: 0;
    }

    .modal-content {
      height: 100%;
      border-radius: 0;
    }


    .cons-img{
        transition: all .4s ease-in;
    }

    .cons-img:hover {
        transform: scale(1.1)
    }

    </style>


    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'গঠনতন্ত্র' : 'Constitution' }}
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mx-auto">
                    <div class="row">
                        <a href="javascript:void" class="" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                            <img class="cons-img" src="https://res.cloudinary.com/saiful/image/upload/w_200,h_250,f_auto,q_50/v1/bnm_project/b8xriyhqdguq6zuofy4e" height="270" width="200" style="border: 4px solid black" alt="">

                        </a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                view
                              </button>

                        </div>
                        <div class=".offset-md-2 col-4 mx-4" >
                            <a href="" class="btn btn-primary">download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div>




        <!-- Button trigger modal -->







  <!-- Modal -->
  <div class="modal " style="" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-body">
            <iframe id="frame" allowfullscreen="allowfullscreen"  class="fp-iframe" src="https://heyzine.com/flip-book/7846dd1d27.html" style="border:none; width: 100%; height: 100%"></iframe>
        </div>

      </div>
    </div>
  </div>

    </div>
{{--
    <!-- Constitution Sections Start -->
    <div class="container my-5">
        <div class="row">
            <!-- Section 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section1.jpg') }}" class="card-img-top" alt="Section 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ১' : 'Chapter 1' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ১ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 1.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section2.jpg') }}" class="card-img-top" alt="Section 2">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ২' : 'Chapter 2' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ২ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 2.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('frontend/img/section3.jpg') }}" class="card-img-top" alt="Section 3">
                    <div class="card-body">
                        <h5 class="card-title">{{ app()->getLocale() == 'bn' ? 'অধ্যায় ৩' : 'Chapter 3' }}</h5>
                        <p class="card-text">
                            {{ app()->getLocale() == 'bn' ? 'এখানে অধ্যায় ৩ সম্পর্কে কিছু বিস্তারিত তথ্য প্রদান করুন।' : 'Here you can provide some detailed information about Chapter 3.' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Add more sections similarly -->
        </div>
    </div>
    <!-- Constitution Sections End --> --}}

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection


<style>




</style>
