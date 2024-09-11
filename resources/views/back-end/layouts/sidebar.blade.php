@php
    $user = \Illuminate\Support\Facades\DB::table('users')->first();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("dashboard")}}" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BNM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $user ? $user->name_en : '' }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url("/dashboard")}}" class="nav-link" id="side-dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">FRONTEND</li>
                <li class="nav-item">
                    <a href="{{route("slider.index")}}" class="nav-link" id="side-slider">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="side-abouts">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            About Info
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("about.index")}}" class="nav-link" id="side-general">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("about-items.index")}}" class="nav-link" id="side-general">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Items</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="side-ratings">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Rating Event
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('rating_event_division') }}" class="nav-link" id="side-division">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Division Committee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rating_event_district') }}" class="nav-link" id="side-district">
                                <i class="far fa-circle nav-icon"></i>
                                <p>District Committee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rating_event_upazila') }}" class="nav-link" id="side-upazila">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Upazila Committee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rating_event_union') }}" class="nav-link" id="side-union">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Union Committee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('rating_event_ward') }}" class="nav-link" id="side-ward">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ward Committee</p>
                            </a>
                        </li>
                    </ul>
                </li>
                                <li class="nav-item">
                    <a href="#" class="nav-link" id="side-Institute of Future Leaders">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Future Leaders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('courses.index') }}" class="nav-link" id="side-courses">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('enrollments.index') }}" class="nav-link" id="side-enrollments">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enrollments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('instructors.index') }}" class="nav-link" id="side-instructors">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instructors</p>
                            </a>
                        </li>
                    </ul>                    
                </li>    
                <li class="nav-item">
                    <a href="#" class="nav-link" id="side-Charity">
                        <i class="nav-icon fa fa-heart"></i>
                        <p>
                            Charity
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('personandfamilybackend') }}" class="nav-link" id="side-person-family">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Person & Family</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-disaster">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disaster</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-charity-dinner">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Charity Dinner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-donate">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Donate</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-institute-build-up">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Institute Build Up</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-religious-cooperation">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Religious Institutions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-entertainment-collaboration">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Entertainment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-scholarship-cooperation">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Scholarship</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="side-medical-accommodation">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Medical</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 
                <li class="nav-item">
                    <a href="{{route("breakingNews.index")}}" class="nav-link" id="side-breakingNews">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            BreakingNews 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("notice.index")}}" class="nav-link" id="side-notice">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Notice 
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("formPdf.index")}}" class="nav-link" id="side-formPdf">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            FormPdf 
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{route("program.index")}}" class="nav-link" id="side-program">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Program
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>

                </li>
                
                <li class="nav-item">
                    <a href="{{route("news.index")}}" class="nav-link" id="side-news">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            News
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{route("eshowcase.index")}}" class="nav-link" id="side-eshowcase">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            E-Showcase
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>

                </li>
                
                
                <li class="nav-item">
                    <a href="{{route("bnmtv.index")}}" class="nav-link" id="side-video">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            BNM TV
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route("video.index")}}" class="nav-link" id="side-video">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Video
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                            {{-- <i class="right fas fa-angle-left"></i> --}}

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route("gallery.index")}}" class="nav-link" id="side-gallery">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Gallery
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route("contactus.index")}}" class="nav-link" id="side-contactus">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Contact Us Message
                            {{-- <i class="fas fa-angle-left right"></i> --}}

                        </p>
                    </a>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="side-settings">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>
                               Site Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route("site-setting.index")}}" class="nav-link" id="side-general">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Site Info</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header">BACKEND</li>

                    <li class="nav-item">
                        <a href="{{route("committee.index")}}" class="nav-link" id="side-committee">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Committee
                                {{-- <i class="fas fa-angle-left right"></i> --}}
                            </p>
                        </a>
    
                    </li>
                <li class="nav-item">
                    <a href="{{route("position.index")}}" class="nav-link" id="side-position">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Position
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route("party-member.index")}}" class="nav-link" id="side-party-member">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Party Member
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("division.index")}}" class="nav-link" id="side-division">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Division
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("district.index")}}" class="nav-link" id="side-district">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            District
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("upazila.index")}}" class="nav-link" id="side-upazila">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Upazila
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("union.index")}}" class="nav-link" id="side-union">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Union
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route("organization.index")}}" class="nav-link" id="side-organization">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Organization
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-header">EXAMPLES</li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
