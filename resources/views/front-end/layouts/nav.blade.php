



<style>

    .join-us-button{
        transition: all .3s ease;
    }

    .join-us-button:hover  {
        transform: scale(1.1);
    };


</style>



<!-- Navbar Start -->
<div class="sticky"
    style="background-color: #ffffff;
 /* border-bottom: 1px solid rgb(219, 219, 219); box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  */
  z-index:99;">

    <div class="top-nav" style="background-color: #39B44B; color:#fff">
        <div class="container">


{{--
            <script>
                function some(gg){
                   let crossIcon =  gg.querySelector('.cross-icon');
                   let mainIcon = gg.querySelector('.main-icon');

                   if($(crossIcon).hasClass('d-none')){
                    $(crossIcon).removeClass('d-none');
                    $(mainIcon).addClass('d-none');
                   } else {
                    $(crossIcon).addClass('d-none');
                    $(mainIcon).removeClass('d-none');
                   }

                }
            </script>

            <div class="row" style="position: relative;">
                <!-- Example single danger button -->
                <div class="offset-5 col" style="">
                    <div class="btn-group" style="position:absolute">
                        <div type="button" class="common-mob" onclick="some(this)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                <a href="" class="position-relative " style="">

                                    <div class="" >
                                        <i class="fa-solid fa-globe main-icon" style="color: #fff; font-size:30px"></i>
                                        <i class="fa-solid fa-x d-none cross-icon"  style="color:white;"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-menu">
                            <div class="switch">
                                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"
                                    {{ session()->get('locale') == 'en' ? 'checked' : '' }}>
                                <label for="language-toggle"></label>
                                <span class="off">EN</span>
                                <span class="on">{{ app()->getLocale() == 'bn' ? 'বাং' : 'BN' }}</span>
                            </div>
                        </div>
                      </div>
                    <div class="btn-group" style="">
                        <div type="button" class=" " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                                <a href="" class="position-relative animated tada infinite" style="font-size: 13px">
                                    <i class="fa fa-phone-alt fa-2x" style="color: #2a362c"></i>
                                    <div class="position-absolute" style="top: -7px; left: 20px">
                                        <span><i class="fa fa-comment-dots"
                                                style="    color: #ffffff; transform: scale(-1.2) translate(18px, 1px) rotate(45deg);"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-menu">
                            <div class="switch">
                                <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"
                                    {{ session()->get('locale') == 'en' ? 'checked' : '' }}>
                                <label for="language-toggle"></label>
                                <span class="off">EN</span>
                                <span class="on">{{ app()->getLocale() == 'bn' ? 'বাং' : 'BN' }}</span>
                            </div>
                        </div>
                      </div>
                      <div class="btn-group" style="">
                        <div type="button" class=" " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="https://maxst.icons8.com/vue-static/icon/popular-request/request-social-media.png" width="100px" alt="">
                        </div>
                        <div class="dropdown-menu">
                            <span>কোনো প্রশ্ন আছে কি? কল করুন: +88 01716010102 +8801871006627</span>
                        </div>
                      </div>
                      <div class="btn-group" style="">
                        <div type="button" class=" " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="https://maxst.icons8.com/vue-static/icon/popular-request/request-social-media.png" width="100px" alt="">
                        </div>
                        <div class="dropdown-menu">
                            <div class="d-flex hightech-link">
                                @if ($siteSetting)
                                    <a href="{{  "https://www.facebook.com/jagojanataparty" }}" style="background-color: #0688FF" target="blank"
                                        class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                            class="fab fa-facebook-f " style="color:#fff"></i></a>
                                    <a href="{{ $siteSetting->twitter_url }}" target="blank"
                                        class="btn-light nav-fill btn btn-square rounded-circle me-2" style="background-color:#000"><i class="fa-brands fa-x-twitter" style="color:#fff"></i></a>
                                    <a href="{{ $siteSetting->instagram_url }}" target="blank"
                                        class="btn-light nav-fill btn btn-square rounded-circle me-2" style="background-color:#B81078"><i
                                            class="fab fa-instagram " style="color:#fff"></i></a>
                                    <a href="{{ $siteSetting->linkedin_url }}" target="blank"
                                        class="btn-light nav-fill btn btn-square rounded-circle me-0"><i
                                            class="fab fa-linkedin-in text-primary"></i></a>
                                @else
                                    <p>No data available.</p>
                                @endif

                            </div>
                        </div>
                      </div>
                </div>
            </div> --}}


        </div>
    </div>

    <style>
      .outer {display: flex; flex-wrap: wrap}

        .inner {
        flex: 1;
        /* height: 200px; */
        width: 200px;
        margin: 0 5px;
        /* background: blue; */
        }

        @media (max-width: 480px) {
            .inner {
                flex: 0 1; /* - 2 x 5px left & right margin */
                /* width: 100px; */
            }
        }
    </style>

    <div class="container">


        <div class="row">
            <div class="col-md-8 col-sm- mx-auto py-2">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- logo --}}

                      <div>
                        <a href="{{ route('frontend.index') }}" class="navbar-brand">
                            <img class="logo" src="https://res.cloudinary.com/saiful/image/upload/e_improve:outdoor:60,f_auto,q_70/v1/bnm_project/fcytfhlveksqqwzhd6lc" class="img-fluid" alt="First slide"
                                style="left:200px" />
                        </a>
                      </div>

                      <div class="sub-text d-flex flex-wrap justify-content-center gap-md-4">
                          <div class="inner" style="flex-basis: max-content">সংস্কার</div>
                          <div class="inner" style="flex-basis: max-content">জাতীয়তাবাদ</div>
                          <div class="inner" style="flex-basis: max-content">ইনসাফ</div>
                          <div class="inner" style="flex-basis: max-content">প্রযুক্তি ও প্রগতি</div>
                      </div>




                  {{-- logo end  --}}


              </div>
            </div>

            <div class=" col-md-3 d-flex justify-content-around align-items-center">
                <div class=" d-flex hightech-link justify-content-start align-items-center">
                    <div class="">
                        @if ($siteSetting)
                            <a href="{{  "https://www.facebook.com/jagojanataparty" }}"  style="background-color: #0688FF" target="blank"
                                class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                    class="fab fa-facebook-f " style="color:#fff"></i></a>

                        @else
                            <p>No data available.</p>
                        @endif

                    </div>
                </div>
                <a href="#join-us" class="join-us-button" style="border-radius: 5px; background:rgb(5 104 57); font-size:1.5em; color:#fff9ce; font-weight:bold; padding: 15px 20px;"> যোগ দিন </a>
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
                                <ul class="d-flex justify-content-center gap-4" style="list-style: none">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link-text" href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact') }}</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-text" href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('সংস্কারের ক্ষেত্র') : __('Reform Area') }}</a>
                                    </li>
                                    <li><a class="nav-link-text" href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('আমাদের দফা') : __('Our Agenda') }}</a></li>
                                    <li>
                                        <a class="nav-link-text" href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('রোডম্যাপ') : __('RoadMap') }}</a>
                                    </li>
                                    <li>
                                        <a class="nav-link-text" href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact us') }}</a>
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
