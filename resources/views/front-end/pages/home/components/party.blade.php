<div class="container-fluid bg-light py-5 team">
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
                <p>No title available.</p>
            @endif
        </div>

        <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">




            @foreach ($partyMember as $item)

            <div class="col-md-3">
                <div class="rounded team-item" style="   ">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle" style="width: 150px; height: 150px; margin: 0 auto;">
                                <img src="{{ asset($item->image) }}" class="img-fluid w-100 h-100 rounded-circle" alt="" style="object-fit: cover;">
                            </div>
                            <div class="team-name text-center pt-3">
                                <h4 class="" style="font-size: 1.25rem;">
                                    {{ app()->getLocale() == 'bn' ? $item->name_bn : $item->name_en }}
                                </h4>
                                <p class="m-0">
                                    {{ app()->getLocale() == 'bn' ? $item->position->name_bn : $item->position->name_en }}
                                </p>
                                <p>
                                    বাংলাদেশ জাতীয়তাবাদী আন্দোলন
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-icon d-flex justify-content-center pb-4">
                        <!-- Add social media icons here if needed -->
                    </div>
                </div>
            </div>

                {{-- <div class="team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img">
                                <img src="{{ asset($item->image) }}" alt="" />
                            </div>
                            <div class="team-name text-center">
                                <h4>
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
                </div> --}}
            @endforeach
        </div>

        <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
            <a href="{{ route('party') }}" class="btn btn-primary"
                style="background-color: #e82629; border-color: #e82629">
                {{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}
            </a>
        </div>
    </div>
</div>
<style>
    .team-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 400px;
        /* Fixed height for the card */
        width: 250px;
        /* Fixed width for the card */
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        /* Center the card */
    }

    .team-content {
        display: flex;
        flex-direction: column;
        height: 100%;

        /* Padding for better spacing */
        box-sizing: border-box;
        text-align: center;
    }

    .team-img-icon {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
    }

    .team-img {
        width: 230px;
        /* Increased width for the image */
        height: 230px;
        /* Increased height for the image */
        border-radius: 50%;
        overflow: hidden;
        margin-bottom: 15px;
    }

    .team-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-name h4 {
        font-size: 18px;
        /* Font size for the name */
    }

    .team-name p {
        font-size: 14px;
        /* Font size for the position and party name */
        color: #555;
    }

    .team-icon {
        margin-top: 15px;
        /* Margin for the icon section */
    }
</style>
