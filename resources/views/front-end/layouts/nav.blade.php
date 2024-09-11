<!-- Navbar Start -->
<div class="fixed-top"
    style="background-color: #fff;
 /* border-bottom: 1px solid rgb(219, 219, 219); box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  */
 margin-top: -0.8px; z-index:99">

    <div class="top-nav" style="background-color: #39B44B; color:#fff">
        <div class="container">
            <div class="row">

                <div class="offset-md-2 col-md-6">
                    <div class="d-none d-xl-flex flex-shrink-0" style="padding:11px 0px 2px 0">
                        <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                            <a href="" class="position-relative animated tada infinite" style="font-size: 13px">
                                <i class="fa fa-phone-alt fa-2x" style="color: #2a362c"></i>
                                <div class="position-absolute" style="top: -7px; left: 20px">
                                    <span><i class="fa fa-comment-dots"
                                            style="    color: #ffffff; transform: scale(-1.2) translate(18px, 1px) rotate(45deg);"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column pe-4 border-end">

                            @if ($siteSetting)
                                <span
                                    style="color: rgb(255, 254, 254)">{{ app()->getLocale() == 'bn' ? 'কোনো প্রশ্ন আছে কি?  কল করুন: ' . $siteSetting->phone : ' Any Query ? pleaase Call: ' . $siteSetting->phone }}</span>
                            @else
                                <p>No data available.</p>
                            @endif

                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-center ms-4 ">
                            @if (Route::has('login'))
                                @auth
                                    <a class="btn btn-success" href="{{ route('dashboard') }}" target="_blank"
                                        style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? __('ড্যাশবোর্ড') : __('Dashboard') }}</a>
                                @else
                                    <a class="btn btn-success" href="{{ route('login') }}" target="_blank"
                                        style="background-color: #e82629; border-color: #e82629">{{ app()->getLocale() == 'bn' ? __('লগইন') : __('Login') }}</a>
                                @endauth
                            @endif
                        </div> --}}

                    </div>
                </div>
                <div class="col-md-2 mt-1">
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
                <div class="col-md-2 mt-2">
                    <div class="switch">
                        <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"
                            {{ session()->get('locale') == 'en' ? 'checked' : '' }}>
                        <label for="language-toggle"></label>
                        <span class="off">EN</span>
                        <span class="on">{{ app()->getLocale() == 'bn' ? 'বাং' : 'BN' }}</span>
                    </div>
                </div>

            </div>


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
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg" style="padding: 10px 0; ">
            <a href="{{ route('frontend.index') }}" class="navbar-brand">
                <img src="https://res.cloudinary.com/saiful/image/upload/e_improve:outdoor:60,w_200,h_200,f_auto,q_50/v1/bnm_project/esbgpolwywmji4wfwel5.png" class="img-fluid" alt="First slide"
                    style="height: auto; width: 40px;     transform: scale(2.5, 2.5) translate(23px, -11px);
                    " />
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
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

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('মতাদর্শ') : __('Ideology') }}</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('constitution') }}"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('গঠনতন্ত্র') : __('Constitution') }}</a>
                            {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                            <a href="{{ route('ethics') }}"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নীতিআদর্শ') : __('Ethics') }}</a>
                            <a href="{{ route('commitment') }}"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অঙ্গীকার') : __('Commitment') }}</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('আর্কাইভ') : __('Archive') }}</a>
                        <div class="dropdown-menu">
                            <a href="#"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('প্রতিবেদন') : __('Report') }}</a>
                            {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                            <a href="{{route('notice-page')}}"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নোটিশ') : __('Notice') }}</a>
                            <a href="#"
                                class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('প্রকাশনা') : __('Publication') }}</a>
                        </div>
                    </li>


                    <style>
                        /* Dropdown submenu */
                        .dropdown-submenu {
                            position: relative;
                        }

                        .dropdown-sub-menu {
                            display: none;
                        }

                        /* Ensure proper display of the dropdown menu on hover */
                        .dropdown-submenu:hover .dropdown-sub-menu {
                            display: block;
                            top: 0;
                            left: 100%;
                            margin-top: -1px;
                            position: absolute;
                            background: #ffffff;

                            border-color: #e82629;
                            border-radius: 5px;

                        }
                    </style>



                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <!-- Media Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ app()->getLocale() == 'bn' ? __('মিডিয়া') : __('Media') }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="mediaDropdown">
                                    <a href="{{ route('news-page') }}" id="news" class="dropdown-item">
                                        {{ app()->getLocale() == 'bn' ? __('সংবাদ') : __('News') }}
                                    </a>
                                    <a href="{{ route('gallery-page') }}" id="gallery" class="dropdown-item">
                                        {{ app()->getLocale() == 'bn' ? __('গ্যালারি') : __('Gallery') }}
                                    </a>
                                    <a href="{{ route('bnmtvs.index') }}"
                                        class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('টিভি') : __('BNM TV') }}</a>
                                </div>
                            </li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                            <div class="navbar-nav ms-auto mx-xl-auto p-0">
                                <!-- Media Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{ app()->getLocale() == 'bn' ? __('একাডেমি') : __('Academy') }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="mediaDropdown">
                                        <a href="{{ route('institute-for-future-leaders') }}" class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('ইনস্টিটিউট অফ ফিউচার লিডার্স ') : __('Institute of Future Leaders') }}
                                        </a>
                                        <a href="{{ route('center-for-artificial-intelligence') }}"
                                            class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('সেন্টার ফর আর্টিফিশিয়াল ইন্টেলিজেন্স ') : __('Center for Artificial Intelligence') }}
                                        </a>
                                        <a href="{{ route('center-for-shadow-governance') }}" class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('সেন্টার ফর শ্যাডো গভর্নেস') : __('Center for Shadow Governance') }}
                                        </a>
                                        <a href="{{ route('center-for-political-research-and-strategy') }}"
                                            class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('সেন্টার ফর পলিটিক্যাল রিসার্চ এন্ড স্ট্রেটেজি') : __('Center for Political Research and Strategy') }}
                                        </a>
                                        <a href="{{ route('youth-parliament') }}" class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('সেন্টার ফর ইয়ুথ পার্লামেন্ট') : __('Center for Youth Parliament') }}
                                        </a>
                                        {{-- <a href="{{ route('center-for-national-happiness') }}" class="dropdown-item">
                                            {{ app()->getLocale() == 'bn' ? __('সেন্টার ফর ন্যাশনাল হ্যাপিনেস') : __('Center for National Happiness') }}
                                        </a> --}}
                                    </div>
                                </li>
                            </div>
                        </div>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('কল্যাণ') : __('Charity') }}</a>
                            <div class="dropdown-menu">
                                <a href="{{ route('person') }}"
                                    class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('ব্যক্তি ও পরিবার') : __('Person & Family') }}</a>
                                {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                                <a href="{{ route('disaster') }}"
                                    class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দুর্যোগ') : __('Disaster') }}</a>
                                <a href="{{ route('charityDinner') }}"
                                    class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চ্যারিটি ডিনার') : __('Charity Dinner') }}</a>
                                <!--<a href="{{ route('exampleEasyCheckout') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দান করুন') : __('Donate') }}</a>-->
                                <a href="{{ route('donate') }}"
                                    class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দান করুন') : __('Donate') }}</a>
                                <div class="dropdown-submenu">
                                    <a href="#"
                                        class="dropdown-item dropdown-toggle">{{ app()->getLocale() == 'bn' ? __('প্রতিষ্ঠান গঠন') : __('Institute Build Up') }}</a>
                                    <div class="dropdown-sub-menu">
                                        <a href="{{ route('religionContext') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('ধর্মীয় প্রতিষ্ঠানে সহযোগিতা') : __('Cooperation in religious institutions') }}</a>
                                        <a href="{{ route('entertainment') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চিত্ত বিনোদন সহযোগিতা') : __('Entertainment Collaboration') }}</a>
                                        <a href="{{ route('education') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('শিক্ষাবৃত্তি ও সহযোগিতা') : __('Scholarship and Cooperation') }}</a>
                                        <a href="{{ route('culturalActivity') }}"
                                            class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চিকিৎসা ও বাসস্থান সহযোগিতা') : __('Medical and Accommodation Assistance') }}</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <a href="{{ route('contact') }}" id="contact"
                            class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact') }}</a>
                        {{-- @if (Route::has('login'))
                        @auth
                            <a href="contact.html" class="nav-item nav-link d-block d-lg-none">{{ app()->getLocale() == 'bn' ? __('ড্যাশবোর্ড') : __('Dashboard') }}</a>
                        @else
                            <a href="contact.html" class="nav-item nav-link d-block d-lg-none">{{ app()->getLocale() == 'bn' ? __('লগইন') : __('Login') }}</a>
                        @endauth
                    @endif --}}
                    </div>
                </div>
                <div class="e-showcase">
                    <a class="showcase"
                        style="padding: 14px;
                background-color: #ffdb59;
                margin-right: 20px;
                border-radius: 10px;
                color: black;
                font-weight: 700;"
                        href="{{ route('e_showcase') }}">
                        {{ app()->getLocale() == 'bn' ? __('ই-শোকেস') : __('E-Showcase') }} </a>
                </div>

                <div class="e-showcase">
                    <a class="showcase"
                        style="padding: 14px;
                                background-color: #ffffff;
                                margin-right: 20px;
                                border-radius: 10px;
                                color: rgb(0, 0, 0);
                                transform:scale(1.4) translate(1);
                                font-weight: 700;"
                        href="{{ route('bnmtvs.index') }}">

                        <img src="https://res.cloudinary.com/saiful/image/upload/w_100,h_80,q_2/v1/bnm_project/vz6gykiapk1reftcx5d1.png" alt="Logo" class=""
                            style="max-width: 38px; transform: rotate(-35deg) translate(1px, 0px) scale(1.7);">
                        <span> </span>
                    </a>
                </div>

                <style>
                    .e-showcase {
                        transition: all .2s ease;
                    }

                    .e-showcase:hover {
                        transform: scale(1.1);
                        /* background-color: #fdcd20; */
                    }
                </style>




        </nav>
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


<div class="container-fluid" style="padding:0; margin-bottom:115px;">
    <div class="">
        <div class="bg-primary text-center"
            style="
                top: 119px;
                position: fixed;
                z-index: 9;
                width:100%;
                box-shadow:0 2px 4px rgb(91 94 91 / 70%)">
            <div class="ticker">
                <!--<div class="news-title">-->
                <!--    <h5>ব্রেকিং নিউজ</h5>-->
                <!--</div>-->
                <div class="news">
                    <marquee class="news-content">
                        <p>
                            বাংলাদেশ জাতীয়তাবাদী আন্দোলন - বি এন এম জাতীয়তাবাদের বিশ্বাসে অটল এবং অনড় - তারুণ্যের
                            শক্তিতে পরিচালিত, দলের ৫০ ভাগ তরুণদের দ্বারা পরিচালিত হবে।
                        </p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>
