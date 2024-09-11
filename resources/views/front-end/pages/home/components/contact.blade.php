<div class="container-fluid py-md-4" style="background:#d3dfd2;">
    <div class="container >
        {{-- <div class="contact p-md-4 bg-light"> --}}
            <div class="row g-md-" style="background:#d3dfd2; margin-bottom:30px">
                <div class="col-md-10 mx-auto text-center form-content" style="">
                   <div class="">
                    @if ($siteSetting)
                    <h1 class="mb-5 mt-4 contact-us-head">{{ app()->getLocale() == 'bn' ? 'বার্তা পাঠান' : 'Get in touch' }}</h1>
                @else
                    <p>No description available.</p>
                @endif


                @if ($siteSetting)
                    <p class="mb-4">
                        {{ app()->getLocale() == 'bn' ? Illuminate\Support\Str::limit($siteSetting->contact_description_bn, 300) : Illuminate\Support\Str::limit($siteSetting->contact_description_en, 300) }}
                    </p>
                @else
                    <p>No description available.</p>
                @endif


                <form action="{{ route('contactus.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row gx-5 gy-4">
                        <div class="col-xl-6">
                            <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার নাম' : 'Your First Name' }}"
                                name="name" />
                        </div>
                        <div class="col-xl-6">
                            <input type="email" class="form-control bg-white border-0 py-3 px-4"
                                placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার ইমেইল' : 'Your Email' }}"
                                name="email" required />
                        </div>
                        <div class="col-xl-6">
                            <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার ফোন নাম্বার' : 'Your Phone' }}"
                                name="phone" required />
                        </div>
                        <div class="col-xl-6">
                            <input type="text" class="form-control bg-white border-0 py-3 px-4"
                                placeholder="{{ app()->getLocale() == 'bn' ? 'বিষয়' : 'Subject' }}" name="subject"
                                required />
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-white border-0 py-3 px-4" name="message" rows="7" cols="10"
                                placeholder="{{ app()->getLocale() == 'bn' ? 'আপনার বার্তা' : 'Your Message' }}" required></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3 px-5"
                                style="background-color: #e82629; border-color: #e82629" type="submit">
                                {{ app()->getLocale() == 'bn' ? 'জমা দিন' : 'Submit' }}
                            </button>
                        </div>
                    </div>
                </form>
                   </div>
                </div>

            </div>


        </div>
    </div>
</div>



<div class="map-area py-5">

    <div class="container">

        <div class="h2 py-5 text-center"> যোগাযোগের ঠিকানা </div>

        <div class="row bg-white">

            <div class=" col-md-6 address d-flex flex-column" style="gap: 20px">
                <div class="bg-white ">
                    <div class="d-flex align-items-center mx-auto">
                        <i class="fas fa-map-marker-alt fa-2x text-primary"
                            style="margin-right: 12px;"></i>
                        <h4>{{ app()->getLocale() == 'bn' ? 'ঠিকানা' : 'Address' }}</h4>
                    </div>

                    @if ($siteSetting)
                        <p class="mb-0">
                            {{ app()->getLocale() == 'bn' ? $siteSetting->address : $siteSetting->address }}
                        </p>
                    @else
                        <p>No data available.</p>
                    @endif
                </div>

                <div class="bg-white ">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope fa-2x text-primary" style="margin-right: 12px;"></i>
                        <h4>{{ app()->getLocale() == 'bn' ? 'আমাদের মেইল' : 'Mail Us' }}</h4>
                    </div>

                    @if ($siteSetting)
                        <p class="mb-0">
                            {{ app()->getLocale() == 'bn' ? $siteSetting->email : $siteSetting->email }}
                        </p>
                    @else
                        <p>No data available.</p>
                    @endif
                </div>


                <div class="bg-white ">
                    <div class="d-flex align-items-center mb-2">
                        <i class="fa fa-phone-alt fa-2x text-primary" style="margin-right: 12px;"></i>
                        <h4>{{ app()->getLocale() == 'bn' ? 'ফোন নাম্বার' : 'Telephone' }}</h4>
                    </div>

                    @if ($siteSetting)
                        <p class="mb-0">
                            {{ app()->getLocale() == 'bn' ? $siteSetting->phone : $siteSetting->phone }}
                        </p>
                    @else
                        <p>No data available.</p>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                @if ($siteSetting)
                    <iframe class="w-100"
                        style="height: 320px; margin-bottom: -6px; border-radius: 5px;"
                        src="{{ $siteSetting->map_url }}" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                @else
                    <p>No data available.</p>
                @endif

            </div>



        </div>
    </div>
</div>


<style>

.from-content {
    background-color: rgb(172, 172, 172);
    padding: 30px 115px;
   }

    @media screen and (max-width:300px){
        .form-content {
            padding: 0 0;
        }
    }


</style>
