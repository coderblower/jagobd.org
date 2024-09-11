 <!-- Footer Start -->
 <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
     <div class="container pt-5 pb-4">
         <div class="row g-5">
             <div class="col-md-4">
                 @if ($siteSetting)
                     <a href="{{ route('frontend.index') }}" class="navbar-brand">
                        <center> <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="First slide"
                             style="height: auto; width: 73px" /></center>
                             <p
                             class="text-white fw-bold" style="margin: 8px 0 0 0">{{ app()->getLocale() == 'bn' ? $siteSetting->site_name_bn : $siteSetting->site_name_en }}
                     </p>
                     </a>
                 @else
                     <p>No data available.</p>
                 @endif
                 @if ($siteSetting)
                     <p class="mt-4 text-light">
                         {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($siteSetting->description_bn, 550) : Illuminate\Support\Str::limit($siteSetting->description_en, 550) }}
                         {{-- <a href="{{ route('abouts') }}">{{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</a> --}}
                     </p>
                 @else
                     <p>No data available.</p>
                 @endif

                 <div class="d-flex hightech-link">
                     @if ($siteSetting)
                         <a href="{{ $siteSetting->facebook_url }}" target="blank"
                             class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                 class="fab fa-facebook-f text-primary"></i></a>
                         <a href="{{ $siteSetting->twitter_url }}" target="blank"
                             class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                 class="fab fa-twitter text-primary"></i></a>
                         <a href="{{ $siteSetting->instagram_url }}" target="blank"
                             class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                                 class="fab fa-instagram text-primary"></i></a>
                         <a href="{{ $siteSetting->linkedin_url }}" target="blank"
                             class="btn-light nav-fill btn btn-square rounded-circle me-0"><i
                                 class="fab fa-linkedin-in text-primary"></i></a>
                     @else
                         <p>No data available.</p>
                     @endif

                 </div>
             </div>
             {{-- <div class="col-lg-4 col-md-6">
                <a href="#" class="h3 text-primary"></a>
                <a href="#" class="text-primary"> <h3 class="text-primary">{{ app()->getLocale() == 'bn' ? 'সাহায্য লিঙ্ক' : 'Help Link' }}</h3></a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Terms Of use</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Privacy Policy</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Helps</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>FQAs</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-primary me-2"></i>Contact</a>
                </div>
            </div> --}}
            <div class="col-md-4">
                <a href="#" class="text-primary">
                    <h3 class="text-primary">{{ app()->getLocale() == 'bn' ? 'সাইট ম্যাপ' : 'Site Map' }}</h3>
                </a>


                        {{-- <div class="nav-item dropdown">

                            <div class="dropdown-menu rounded">
                                <a href="{{ route('party') }}"
                                    class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                            </div>
                        </div> --}}



                            {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('মতাদর্শ') : __('Ideology') }}</a> --}}

                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('গঠনতন্ত্র') : __('Person & Family') }}</a> --}}
                                {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নীতিআদর্শ') : __('Disaster') }}</a> --}}
                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অঙ্গীকার') : __('Charity Dinner') }}</a> --}}




                            {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('আর্কাইভ') : __('archive') }}</a> --}}

                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('প্রতিবেদন') : __('Person & Family') }}</a> --}}
                                {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নোটিশ') : __('Disaster') }}</a> --}}
                                {{-- <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('প্রকাশনা') : __('Charity Dinner') }}</a> --}}
















                            {{-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('কল্যাণ') : __('Charity') }}</a> --}}

                                {{-- <a href="{{ route('person') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('ব্যক্তি ও পরিবার') : __('Person & Family') }}</a> --}}
                                {{-- <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a> --}}
                                {{-- <a href="{{ route('disaster') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দুর্যোগ') : __('Disaster') }}</a> --}}
                                {{-- <a href="{{ route('charityDinner') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চ্যারিটি ডিনার') : __('Charity Dinner') }}</a> --}}
                                {{-- <!--<a href="{{ route('exampleEasyCheckout') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দান করুন') : __('Donate') }}</a>--> --}}
                                {{-- <a href="{{ route('donate') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দান করুন') : __('Donate') }}</a> --}}

                                    {{-- <a href="#" class="dropdown-item dropdown-toggle">{{ app()->getLocale() == 'bn' ? __('প্রতিষ্ঠান গঠন') : __('Institute Build Up') }}</a> --}}

                                        {{-- <a href="{{ route('religionContext') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('ধর্মীয় প্রতিষ্ঠানে সহযোগিতা') : __('Cooperation in religious institutions') }}</a> --}}
                                        {{-- <a href="{{ route('entertainment') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চিত্ত বিনোদন সহযোগিতা') : __('Entertainment Collaboration') }}</a> --}}
                                        {{-- <a href="{{ route('education') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('শিক্ষাবৃত্তি ও সহযোগিতা') : __('Scholarship and Cooperation') }}</a> --}}
                                        {{-- <a href="{{ route('culturalActivity') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('চিকিৎসা ও বাসস্থান সহযোগিতা') : __('Medical and Accommodation Assistance') }}</a> --}}




                        {{-- <a href="{{ route('contact') }}" id="contact" --}}
                            {{-- class="nav-item nav-link">{{ app()->getLocale() == 'bn' ? __('যোগাযোগ') : __('Contact') }}</a> --}}
                        {{-- @if (Route::has('login'))
                            @auth
                                <a href="contact.html" class="nav-item nav-link d-block d-lg-none">{{ app()->getLocale() == 'bn' ? __('ড্যাশবোর্ড') : __('Dashboard') }}</a>
                            @else
                                <a href="contact.html" class="nav-item nav-link d-block d-lg-none">{{ app()->getLocale() == 'bn' ? __('লগইন') : __('Login') }}</a>
                            @endauth
                        @endif --}}



                        <nav class="vertical">
                            <ul>
                              {{-- <li><a href="#">Home</a></li> --}}
                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                <a href="#" class="nav-link dropdown-toggle" id="party"
                                data-bs-toggle="dropdown">{{ app()->getLocale() == 'bn' ? __('দল') : __('Party') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('abouts')}}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('পরিচিতি') : __('About-Us') }}</a>
                                    </li>
                                    <li>

                                        <a href="{{ route('partyMembers') }}" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('দলীয় সদস্য') : __('Party Members') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('নেতৃবৃন্দ') : __('Our Leaders') }}</a>
                                    </li>
                                    <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('সহযোগী সংগঠন') : __('সহযোগী সংগঠন') }}</a>
                                    </li> <li>

                                        <a href="#" class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('অংগ সংগঠন') : __('অংগ সংগঠন') }}</a>
                                    </li>
                                </ul>
                              </li>

                              <li>
                                  <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                                      {{ app()->getLocale() == 'bn' ? __('মিডিয়া') : __('Media') }}
                                    </a>
                                    <ul>
                                        <li>
                                             <a href="{{ route('news-page') }}" id="news" class="dropdown-item">
                                             {{ app()->getLocale() == 'bn' ? __('সংবাদ') : __('News') }}
                                         </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('gallery-page') }}" id="gallery" class="dropdown-item">
                                             {{ app()->getLocale() == 'bn' ? __('গ্যালারি') : __('Gallery') }}
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('bnmtvs.index') }}"  class="dropdown-item">{{ app()->getLocale() == 'bn' ? __('টিভি') : __('BNM TV') }}</a>
                                        </li>
                                    </ul>
                                </li>








                              <li><a href="#">Products +</a>
                                <ul>
                                  <li><a href="#">Widgets</a></li>
                                  <li>
                                    <a href="#">Sites +</a>
                                    <ul>
                                      <li><a href="#">Site 1</a></li>
                                      <li><a href="#">Site 2</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#">Gadgets +</a>
                                    <ul>
                                      <li><a href="#">Gadget 1</a></li>
                                      <li><a href="#">Gadget 2</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="">Contact</a></li>
                            </ul>
                          </nav>
<style>
nav.vertical{
  position:relative;
  /* background:#667; */
}

/* ALL UL */
nav.vertical ul{
  list-style: none;
}
/* ALL LI */
nav.vertical li{
  position:relative;
}
/* ALL A */
nav.vertical a{
  display:block;
  color:#eee;
  text-decoration:none;
  padding:10px 15px;
  transition:0.2s;
}
/* ALL A HOVER */
nav.vertical li:hover > a{
  /* background:#778; */
}

/* INNER UL HIDE */
nav.vertical ul ul{
  /* background:rgba(0,0,0,0.1); */
  padding-left:20px;
  transition: max-height 0.2s ease-out;
  max-height:0;
  overflow:hidden;
}
/* INNER UL SHOW */
nav.vertical li:hover > ul{
  max-height:500px;
  transition: max-height 0.25s ease-in;
}

</style>

            </div>

             <div class="col-md-4">
                 <a href="#" class="text-primary">
                     <h3 class="text-primary">{{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Contact Us' }}</h3>
                 </a>
                 <div class="text-white mt-4 d-flex flex-column contact-link">

                     @if ($siteSetting)
                         <a href="#" class="pb-3 text-light border-bottom border-primary"> <i
                                 class="fas fa-map-marker-alt text-primary me-2"></i>{{ app()->getLocale() == 'bn' ? $siteSetting->address : $siteSetting->address }}</a>
                     @else
                         <p>No data available.</p>
                     @endif
                     @if ($siteSetting)
                         <a href="#" class="py-3 text-light border-bottom border-primary">
                             <i
                                 class="fas fa-phone-alt text-primary me-2"></i>{{ app()->getLocale() == 'bn' ? $siteSetting->phone : $siteSetting->phone }}</a>
                     @else
                         <p>No data available.</p>
                     @endif
                     @if ($siteSetting)
                         <a href="#" class="py-3 text-light border-bottom border-primary">
                             <i
                                 class="fas fa-envelope text-primary me-2"></i>{{ app()->getLocale() == 'bn' ? $siteSetting->email : $siteSetting->email }}</a>
                     @else
                         <p>No data available.</p>
                     @endif

                 </div>
             </div>

         </div>
         <hr class="text-light mt-5 mb-4">
         <div class="row">
             <div class="col-md-6 text-center text-md-start">
                 <span class="text-light">
                     @if ($siteSetting)
                         <a href="#" class="text-primary"><i
                                 class="fas fa-copyright text-primary me-2"></i>{{ $siteSetting->site_name_en }} </a>
                     @else
                         <p>No data available.</p>
                     @endif

                     , All right reserved.
                 </span>
             </div>
             <div class="col-md-6 text-center text-md-end">
                 <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                 <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-primary"> <a
                             href="https://versatilo.group">Versatilo Group</a></span>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->
