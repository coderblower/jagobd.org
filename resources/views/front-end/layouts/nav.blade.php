



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

    <div class="container">


        <div class="row">
            <div class="col-md-8 mx-auto py-2">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- logo --}}

                      <div>
                        <a href="{{ route('frontend.index') }}" class="navbar-brand">
                            <img class="logo" src="https://res.cloudinary.com/saiful/image/upload/e_improve:outdoor:60,f_auto,q_70/v1/bnm_project/fcytfhlveksqqwzhd6lc" class="img-fluid" alt="First slide"
                                style="left:200px" />
                        </a>
                      </div>

                      <div class="sub-text d-flex justify-content-center gap-4 mt-4">
                          <div>সংস্কার</div>
                          <div>জাতীয়তাবাদ</div>
                          <div>ইনসাফ</div>
                          <div>প্রযুক্তি ও প্রগতি</div>
                      </div>



                  {{-- logo end  --}}


              </div>
            </div>

            <div class="offset-md-1 col-md-3 d-flex justify-content-around align-items-center">
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

    <div class="container-fluid" style="background:#008C87">
        <div class="container">
            <div class="row">
                <div class=" col-md-3 mx-auto ">
                    <nav class="navbar navbar-light navbar-expand-lg " style=" ">




                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"> </span>
                        </button>
                        <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                            <div class="navbar-nav ms-auto mx-xl-auto p-0">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('পার্টি') : __('Party') }}</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('abouts') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                        {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                                        <a href="{{ route('party') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                        <a href="{{ route('associate') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('Associated organization') }}</a>
                                        <a href="{{ route('affiliate') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অঙ্গ সংগঠন') : __('Affiliate Organization') }}</a>
                                    </div>
                                </li>

                                <a href="{{ route('contact') }}" id="contact" class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact') }}</a>

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
