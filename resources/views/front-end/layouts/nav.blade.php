



<style>
    .outer {display: flex; flex-wrap: wrap}

.inner {
padding:20px 30px;

flex: 1;
/* height: 200px; */
width: 200px;
margin: 0 5px;
/* background: blue; */
}



    .join-us-button{
        transition: all .3s ease;
    }

    .join-us-button:hover  {
        transform: scale(1.1);
    };

    .top-nav {
        min-height: 30px;
    }

    .top-nav button{
        transform: translateY(33%);
        padding: 10px 25px;
        border-radius: 14px;
        border: none;
        font-family: 'myfont';
        font-weight: bold;
        letter-spacing: 1px;
        font-size: 18px;
        color: green;
        background-color: #ffffff;
        position: relative;
        /* transition: all 1ms ease; */
        transition: all .5s ease;
    }


    .fb-icon {

    top: 29px;

    transform: scale(1.2);
    }

    .top-nav button:hover{
        transform: scale(1.1) translate(0px, 10px)
    }
    /* .top-nav button::after{
        content: "";
        width:50px;
        height: 5px;
        background-image:linear-gradient(180deg, transparent, rgb(191 128 128 / 38%));
        bottom: 0;
        left: 0;
        position: absolute;
        z-index: 55; */

        /* box-shadow:   0 1px 3px #666; */
    }



</style>


<div class="top-nav" style="height:40px; background:red; position: relative;">
    <div class="container">

        <div class="d-flex justify-content-around align-items-center" style="width:200px; float:right
        " >



            <div class="fb">
                <div class="fb-icon  ">
                    <a href="{{  "https://www.facebook.com/jagojanataparty" }}"  style="background-color: #0688FF" target="blank"
                    class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                        class="fab fa-facebook-f " style="color:#fff"></i></a>
                </div>

            </div>
            <div class="button">
                <button>যোগ দিন </button>
            </div>
        </div>
    </div>
</div>

<!-- Navbar Start -->
<div class="sticky" style="background-color: #ffffff; z-index:99;">


    <div class="container">


        <div class="row">
            <div class="col-md-12 col-sm-  py-2">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- logo --}}

                      <div style="flex-basis: 412px;">
                        <a href="{{ route('frontend.index') }}" class="navbar-brand">
                            <img class="logo" src="https://res.cloudinary.com/saiful/image/upload/e_improve:outdoor:60,f_auto,q_70/v1/bnm_project/fcytfhlveksqqwzhd6lc" class="img-fluid" alt="First slide"
                                style="left:200px" />
                        </a>
                      </div>

                      <div class="sub-text d-flex flex-wrap justify-content-sm-start justify-content-md-start gap-md-4 gap-1">
                          <div class="inner" style="flex-basis: max-content">সংস্কার</div>
                          <div class="inner" style="flex-basis: max-content">জাতীয়তাবাদ</div>
                          <div class="inner" style="flex-basis: max-content">ইনসাফ</div>
                          <div class="inner" style="flex-basis: max-content">প্রযুক্তি ও প্রগতি</div>
                      </div>




                  {{-- logo end  --}}


              </div>
            </div>

        </div>



    </div>



    <style>

        .main-nav{
            position: relative;
        }

        .main-nav::after {
            content: "";
            height: 10px;
            width: 100%;
            top:0;
            left:0;
            background:green;
            position: absolute;

        }

        .nav-link-text {
            font-family: 'myfont';
            color: rgb(19, 19, 19);
            font-weight: bold;
            font-size: 20px;
        }

    @media (max-width: 480px) {
    .inner {
        flex: 0 1; /* - 2 x 5px left & right margin */
        /* width: 100px; */
    }

    .top-nav button {
        padding: 1px 2px;
    }
}

@media (max-width: 880px) {
    .top-nav button {
        padding: 4px 8px;
    }
    .logo{
        width:150px;
    }
}

    </style>

    <div class="container-fluid main-nav" style="background:#f5f5f5">
        <div class="container">
            <div class="row">
                <div class=" col-md-10 mx-auto ">
                    <nav class="navbar navbar-light navbar-expand-lg " style=" ">

                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"> </span>
                        </button>

                        <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                            <div class="navbar-nav ms-auto mx-xl-auto p-0">
                                <ul class="d-md-flex justify-content-center gap-4" style="list-style: none">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link-text" href="#amader-kotha" id="nav-amader-kotha" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('আমাদের কথা') : __('Contact') }}</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-text" href="#songsker-khetro" id="nav-songsker" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('সংস্কারের ক্ষেত্র') : __('Reform Area') }}</a>
                                    </li>
                                    <li><a class="nav-link-text" href="{{ route('dofa') }}" id="nav-amader-dofa" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('আমাদের দফা') : __('Our Agenda') }}</a></li>
                                    <li>
                                        <a class="nav-link-text" href="#road-map" id="nav-road-map" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('রোডম্যাপ') : __('RoadMap') }}</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-text" href="{{ route('contact') }}" id="nav-contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact us') }}</a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </nav>
                </div>

               </div>
        </div>
    </div>
</div>

{{-- <div class="tiker" style="position: relative">
    <div class="container">
        <div class="row">
            <div class="bg-primary text-center">
                <div class="ticker">
                    <!--<div class="news-title">-->
                    <!--    <h5>{{ app()->getLocale() == 'bn' ? __('ব্রেকিং নিউজ') : __('Breaking News') }}</h5>-->
                    <!--</div>-->
                    <div class="news">
                        <marquee class="news-content">
                            @foreach ($breakingNews as $key => $item)
                                <p>
                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                </p>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- Navbar End -->


{{-- @include('front-end.layouts.marquee'); --}}
