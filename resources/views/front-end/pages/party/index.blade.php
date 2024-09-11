@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'নেতৃবৃন্দ' : 'Leaders' }}</h1>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-fluid py-4 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
                @if ($siteSetting)
                    <h5 class="text-primary">
                        {{ app()->getLocale() == 'bn' ? $siteSetting->member_subtitle_bn : $siteSetting->member_subtitle_en }}
                    </h5>
                @else
                    <p>No subtitle available.</p>
                @endif

                @if ($siteSetting)
                    <h1>
                        {{ app()->getLocale() == 'bn' ? $siteSetting->member_title_bn : $siteSetting->member_title_en }}
                    </h1>
                @else
                    <p>No subtitle available.</p>
                @endif
            </div>

            <div class="row g-4 wow mb-5 fadeIn justify-content-center" data-wow-delay=".5s">
                <div class="col-md-3 mb-1">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset($charmenPartyMember[0]->image) }}"
                                        class="img-fluid w-100 rounded-circle" alt="" />
                                </div>
                                <div class="team-name text-center pt-3">
                                    @if ($charmenPartyMember)
                                        <h4 class="">
                                            {{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->name_bn : $charmenPartyMember[0]->name_en }}
                                        </h4>
                                        <p class="m-0">
                                            {{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->position->name_bn : $charmenPartyMember[0]->position->name_en }}
                                        </p>
                                        <p>
                                            {{ app()->getLocale() === 'bn' ? $charmenPartyMember[0]->party_name_bn : $charmenPartyMember[0]->party_name_en }}
                                        </p>
                                    @endif
                                </div>
                                {{-- <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-square btn text-white rounded-circle m-1" href="" style="background-color: #39b44b">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 wow fadeIn" data-wow-delay=".5s">
                <!-- Central Executive Committee Section -->
                <div class="col-12">
                    {{-- <h3 class="m-4 text-center">{{ app()->getLocale() == 'bn' ? 'কেন্দ্রীয় কার্যনির্বাহী কমিটি' : 'Central Executive Committee' }}</h3> --}}
                    <div class="row">
                        @foreach ($partyMember as $item)
                            @if ($item->committee_id == 1)
                                <div class="col-md-3 mb-1">
                                    <div class="rounded team-item"
                                        style="height: 400px; width: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="team-content">
                                            <div class="team-img-icon">
                                                <div class="team-img rounded-circle"
                                                    style="width: 150px; height: 150px; margin: 0 auto;">
                                                    <img src="{{ asset($item->image) }}"
                                                        class="img-fluid w-100 h-100 rounded-circle" alt=""
                                                        style="object-fit: cover;" />
                                                </div>
                                                <div class="team-name text-center pt-3">
                                                    <h4 class="" style="font-size: 1.25rem;">
                                                        {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                                    </h4>
                                                    <p class="m-0">
                                                        {{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}
                                                    </p>
                                                    <p>
                                                        {{ app()->getLocale() == 'bn' ? $item->party_name_bn : $item->party_name_en }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-icon d-flex justify-content-center pb-4">
                                            <!-- Add social media icons here if needed -->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <br>
                <!-- National Standing Committee Section -->
                <div class="col-12">
                    <h3 class="m-4 text-center">
                        {{ app()->getLocale() == 'bn' ? 'জাতীয় স্থায়ী কমিটি' : 'National Standing Committee' }}</h3>
                    <div class="row">
                        @foreach ($partyMember as $item)
                            @if ($item->committee_id == 2)
                                <div class="col-md-3 mb-1">
                                    <div class="rounded team-item"
                                        style="height: 400px; width: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="team-content">
                                            <div class="team-img-icon">
                                                <div class="team-img rounded-circle"
                                                    style="width: 150px; height: 150px; margin: 0 auto;">
                                                    <img src="{{ asset($item->image) }}"
                                                        class="img-fluid w-100 h-100 rounded-circle" alt=""
                                                        style="object-fit: cover;" />
                                                </div>
                                                <div class="team-name text-center pt-3">
                                                    <h4 class="" style="font-size: 1.25rem;">
                                                        {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                                    </h4>
                                                    <p class="m-0">
                                                        {{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}
                                                    </p>
                                                    <p>
                                                        {{ app()->getLocale() == 'bn' ? $item->party_name_bn : $item->party_name_en }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-icon d-flex justify-content-center pb-4">
                                            <!-- Add social media icons here if needed -->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Advisory Committee Section -->
                <div class="col-12">
                    <h3 class="m-4 text-center">{{ app()->getLocale() == 'bn' ? 'উপদেষ্টা কমিটি' : 'Advisory Committee' }}
                    </h3>
                    <div class="row">
                        @foreach ($partyMember as $item)
                            @if ($item->committee_id == 3)
                                <div class="col-md-3 mb-1">
                                    <div class="rounded team-item"
                                        style="height: 400px; width: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="team-content">
                                            <div class="team-img-icon">
                                                <div class="team-img rounded-circle"
                                                    style="width: 150px; height: 150px; margin: 0 auto;">
                                                    <img src="{{ asset($item->image) }}"
                                                        class="img-fluid w-100 h-100 rounded-circle" alt=""
                                                        style="object-fit: cover;" />
                                                </div>
                                                <div class="team-name text-center pt-3">
                                                    <h4 class="" style="font-size: 1.25rem;">
                                                        {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                                    </h4>
                                                    <p class="m-0">
                                                        {{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}
                                                    </p>
                                                    <p>
                                                        {{ app()->getLocale() == 'bn' ? $item->party_name_bn : $item->party_name_en }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-icon d-flex justify-content-center pb-4">
                                            <!-- Add social media icons here if needed -->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
<br>
<br>

        </div>
    </div>



@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
