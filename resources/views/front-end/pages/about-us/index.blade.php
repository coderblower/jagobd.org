@extends('front-end.layouts.master')
@section('title', 'About Us')
@section('content')
    {{-- <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section" style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">{{ app()->getLocale() == 'bn' ? 'পরিচিতি' : 'About Us' }}</h1>
        </div>
    </div>
    <!-- Page Header End --> --}}


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div id="" class="" data-bs-ride="">
            <div class="carousel-inner">

              <div class="">
                <img src="//bnmbd.org/uploads-image/sliders/1723464041.png" class="d-block w-100"   alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>

            </div>

        </div>


        <div class="container">

            <div class="row g-5 mt-3">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset($about_us->image2) }}" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%" />
                        <div class="position-absolute w-75" style="top: 25%; left: 25%">
                            <img src="{{ asset($about_us->image1) }}" class="img-fluid w-100 rounded" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 style="color: #39b44b">
                        {{ app()->getLocale() == 'bn' ? $siteSetting->about_subtitle_bn : $siteSetting->about_subtitle_en }}
                    </h5>
                    <h1 class="mb-4">
                        {{ app()->getLocale() == 'bn' ? $about_us->title_bn : $about_us->title_bn }}
                    </h1>
                    <p style="color: black">
                        {{ app()->getLocale() == 'bn' ? $about_us->description_bn : $about_us->description_en }}
                    </p>
                </div>
            </div>
        </div>

        <br>

        <div class="">
            <div class="row">
                <div class="d-flex justify-content-center item-center py-5 " style=" width:100%; background:#39b44b" >
                    <h2 class="text-white">
                        {{app()->getLocale() == 'bn'? 'বিএনএম এর সংক্ষিপ্ত ইতিহাস' : 'Short History of BNM'}}
                   </h2>
                </div>
                <section style="background-color: #F0F2F5;">
                    <div class="container py-5">
                      <div class="main-timeline">
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2017</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2016</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2015</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2012</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2011</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4">
                              <h3>2007</h3>
                              <p class="mb-0">Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
                                mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua
                                dignissim per, habeo iusto primis ea eam.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>

        <br>


        <div class="container">
            <div class="row g-5 mt-3">
                @foreach ($about_items as $key => $item)
                    <div class="col-lg-10 col-xl-10 mb-4 wow fadeIn mx-auto" data-wow-delay=".3s">
                        <div class="card ">
                            {{-- <img src="{{ asset($item->image) }}" class="card-img-top" alt="image"> --}}
                            <div class="card-body">
                                <h2 class="card-title text-center">{{ $key + 1 }}.
                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                </h2>

                               <center> <p class="card-text" style="text-align: center">{!! app()->getLocale() == 'bn' ? $item->description_bn : $item->description_en !!}</p></center>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


         {{-- <x-Alert/> --}}

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <style>
            .card {

                /* height: 30rem; Fixed card height */

                display: flex;
                flex-direction: column;
            }

            .card-img-top {
                height: 12rem;
                /* Fixed image height */
                width: 100%;
                object-fit: contain;
                /* Ensures the whole image is visible, maintaining aspect ratio */
            }

            .card-body {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                overflow: hidden;
            }

            .card-title {
                font-size: 1.25rem;
                font-weight: bold;
                margin-bottom: 0.5rem;
            }

            .card-text {
                flex-grow: 1;
                overflow-y: auto;
                /* Makes the text scrollable if it overflows */
                /* max-height: 10rem; */
                /* Limits the height of the text area */
            }

            /* The actual timeline (the vertical ruler) */
.main-timeline {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline::after {
  content: "";
  position: absolute;
  width: 6px;
  background-color: #939597;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: #939597;
  border: 5px solid #f5df4d;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after,
  .right::after {
    left: 18px;
  }

  .left::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
        </style>

    </div>
    <!-- About End -->

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#about").addClass('active');
        });
    </script>
@endsection
