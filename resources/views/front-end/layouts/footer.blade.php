<!-- Footer Start -->
<div class="container-fluid footer bg-dark">
    <div class="container pt-4 pb-3">
        <div class="row py-4" >
            <div class="col-md-5">
                @if ($siteSetting)
                    <a href="{{ route('frontend.index') }}" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('frontend/img/BNMLogo.png') }}" class="img-fluid" alt="Logo"
                            style="width: 73px" />
                        <span class="text-white fw-bold ms-2">{{ app()->getLocale() == 'bn' ? $siteSetting->site_name_bn : $siteSetting->site_name_en }}</span>
                    </a>
                    <p class="text-light mt-3" style="text-align: justify">
                        {{ Illuminate\Support\Str::limit(app()->getLocale() == 'bn' ? $siteSetting->description_bn : $siteSetting->description_en, 200) }}
                    </p>
                @else
                    <p class="text-light">No data available.</p>
                @endif


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
            <div class=" col-md-2">
                <h5 class="text-primary">{{ app()->getLocale() == 'bn' ? 'সাইট ম্যাপ' : 'Site Map' }}</h5>
                <nav>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('abouts') }}"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'পরিচিতি' : 'About Us' }}</a></li>
                        <li><a href="{{ route('partyMembers') }}"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'দলীয় সদস্য' : 'Party Members' }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'নেতৃবৃন্দ' : 'Our Leaders' }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠন' : 'Affiliate Organizations' }}</a>
                        </li>
                        <li><a href="#"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'অঙ্গ সংগঠন' : 'Wings' }}</a></li>
                        <li><a href="#"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'গঠনতন্ত্র' : 'Constitution' }}</a>
                        </li>
                        <li><a href="{{ route('charityDinner') }}"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'চ্যারিটি ডিনার' : 'Charity Dinner' }}</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-light">{{ app()->getLocale() == 'bn' ? 'যোগাযোগ' : 'Contact' }}</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-5">
                <h5 class="text-primary">{{ app()->getLocale() == 'bn' ? 'যোগাযোগ করুন' : 'Contact Us' }}</h5>
                <p class="text-light" style="text-align: justify"><i class="fas fa-map-marker-alt text-primary"></i>
                    @if ($siteSetting)
                        {{ $siteSetting->address }}
                    @else
                        No data available.
                    @endif
                </p>
                <p class="text-light"><i class="fas fa-phone-alt text-primary"></i>
                    @if ($siteSetting)
                        {{ $siteSetting->phone }}
                    @else
                        No data available.
                    @endif
                </p>
                <p class="text-light"><i class="fas fa-envelope text-primary"></i>
                    @if ($siteSetting)
                        {{ $siteSetting->email }}
                    @else
                        No data available.
                    @endif
                </p>
            </div>
        </div>
        <hr class="text-light mt-3 mb-3">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-light">© @if ($siteSetting)
                        {{ $siteSetting->site_name_en }}
                    @else
                        Your Company
                    @endif. All rights reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-light">Designed & Developed by <a href="https://versatilo.group"
                        class="text-primary">Versatilo Group</a></span>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
