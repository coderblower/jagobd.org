<div class="container-fluid bg-secondary py-5" id="stats-section"
    style="
background-image: url('@php
    echo "//res.cloudinary.com/saiful/image/upload/q_33,h_500/v1/bnm_project/wigccbuubv7jxnfovaom.jpg";
@endphp');
background-size: cover;
background-attachment: fixed;
">


    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">

            @if ($siteSetting)
                <h1 style="color: #fff !important">
                    {{ app()->getLocale() == 'bn' ? $siteSetting->form_sec_title_bn : $siteSetting->form_sec_title_en }}
                </h1>
            @else
                <p>No Title available.</p>
            @endif

        </div>
        <div class="row justify-content-center">
            @foreach ($formPdf as $key => $item)
                <div class="col-lg-2 col-md-4 col-sm-6 col-12 mb-4 wow fadeIn" data-wow-delay=".1s">
                    <div class="counter d-flex flex-column align-items-center text-center">
                        <i class="fa fa-file-pdf counter-icon mb-3" style="font-size: 2rem; color: #fff"></i>
                        <h5 class="countingr text-white mb-3">
                            {{ app()->getLocale() == 'bn' ? $item->title_bn :$item->title_en }}
                        </h5>
                        <a href="{{ asset($item->pdf) }}" download class="multi_button btn btn-style">
                            {{ app()->getLocale() == 'bn' ? 'ডাউনলোড করুন' : 'Download' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
