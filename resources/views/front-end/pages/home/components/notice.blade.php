
   <!-- notic start -->


   <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
                <h1 class="">
                    @if ($siteSetting)
                    {{ app()->getLocale() == 'bn' ? $siteSetting->notice_title_bn : $siteSetting->notice_title_en }}
                        @else
                            <p>No description available.</p>
                        @endif
                </h1>
            </div>
            <div class="row grid row-gap-3 ">

                @foreach ($notice as $key => $item)
                    @if ($key<2)
                    <div class="col-md-6 mx-auto my-2">
                        <div class="notice-card" style="">
                            <div class="description" style="">
                                <h5><a href="{{ route('notice.details', $item->id) }}">
                                        {{ app()->getLocale() == 'bn' ? $item->title_bn : $item->title_en }}
                                    </a></h5>
                                <p>
                                    {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($item->description_bn, 95) : Illuminate\Support\Str::limit($item->description_en, 95) }}
                                </p>
                                {{ app()->getLocale() == 'bn' ? $item->date : $item->date }}

                                <a href="{{ route('notice.details', $item->id) }}"
                                    class="text-primary d-flex justify-content-end"><small>
                                        {{ app()->getLocale() == 'bn' ? 'আরও পড়ুন' : 'Read More' }}</small></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endif

                @endforeach
            </div>
            <div class="text-end mx-auto mt-4 wow fadeIn" data-wow-delay=".3s">
                <a href="{{ route('notice-page') }}" class="btn btn-primary"
                    style="background-color: #e82629; border-color: #e82629">
                    {{ app()->getLocale() == 'bn' ? 'আরো দেখুন...' : 'See More...' }}
                </a>
            </div>
        </div>
    </div>


    <style>

.notice-card {
        display: flex;
        flex-direction: column;
        /* height: 350px; */
        /* Adjust the height as needed */
        overflow: hidden;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .notice-card .meta {
        height: 150px;
        /* Adjust the height as needed */
        overflow: hidden;
    }

    .notice-card .photo {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
    }

    .notice-card .description {
        flex: 1;
        padding: 15px;
        overflow: hidden;
    }

    .notice-card h5,
    .notice-card .date,
    .notice-card p {
        margin: 0;
        padding: 0;
    }

    .notice-card h5 a {
        text-decoration: none;
        color: #333;
        font-size: 18px;
    }

    .notice-card .read-more a {
        color: #e82629;
        text-decoration: none;
    }


    </style>
    <!-- notic End -->
