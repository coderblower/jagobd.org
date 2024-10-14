@extends('front-end.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- Carousel Start -->
    @include('front-end.pages.home.components.slider_single')
    <!-- Carousel End -->

   {{-- @include('front-end.pages.home.components.about-us') --}}



   <style>

    .common-section-title {
        text-align: center;
        color: rgb(5 104 57);
        font-weight: bold;
        font-family: 'myfont';
        padding: 45px 0;
        letter-spacing: 3px;
        font-size: 3em;
    }

    .cart{
        width:400px;
        background:#008C87;
        color:white;
        margin: 20px 0;
        padding: 20px 10px;
    }

    .custom-card {
            width: 300px;
            height: 300px;
            margin: 15px;
            background-color: #f8f9fa; /* Light background for the card */
            border: 1px solid #dee2e6; /* Optional border */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

    .amader-kotha-title::after{
        content: "";
        height: 70vh;
        width: 5px;
        position: relative;
        right: -60px;
        top: 84px;
        background: rgb(12, 187, 120);
    }

    .reform-title::before{
        content: "";
        height: 100vh;
        width: 5px;
        position: relative;
        right:  60px;
        top: 0;
        background: rgb(206, 164, 28);
    }

    .cart{
        position: relative;
    }
    .cart::after{
        content: '';
        position: absolute;
        top: 50%;
        right: -80px;
        transform: translateY(-50%);
        border-top: 64px solid transparent;
        border-bottom: 64px solid transparent;
        border-left: 80px solid #008C87
    }

    .custom-card span{
        font-size: 15px;
        color:#dee2e6;
        background: #ff3300;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        text-align: center;
        position: absolute;
        transform: scale(1.7);
        padding: 2px;
        top:-9px;
        right:-9px;
    }

   .custom-card h3{
        font-size: 19px;
        padding: 0 24px;
        text-align: start;
        line-height: 26px;
        margin-top: 23px;
    }

    .amader-kotha p {
        font-size: 1em;
    }

    @media (max-width: 880px) {
        .common-section-title{
            padding: 14px 0 !important;
        }
    }
   </style>


<section id="amader-kotha" style="padding: 30px 0">
    <div class="container-fluid">
        <div class="row" style="">
            <div class="col-md-5 text-center amader-kotha-title d-md-flex justify-content-center align-items-center " style="">
                <img src="{{asset('frontend/img/banner-main-1.jpg')}}" alt="" style="max-width: 70%">
             </div>
             <div class="col-md-7 text-center d-flex justify-content-center  " style="">
                 <div class="amader-kotha d-flex justify-content-around flex-column text-justify" style="padding:40px 20px;">

                    <h2 class="common-section-title" style="">
                        আমাদের কথা

                     </h2>

                    <div>
                        <p class="" style="text-align: justify">
                            <span style="font-weight: bold; color:black">স্বাধীনতার পরবর্তী সবচেয়ে বড় গণঅভ্যুত্থান ২০২৪</span> সালের বৈষম্য বিরোধী ছাত্র-জনতার আন্দোলন। এই আন্দোলনের ভাষা, বিপ্লবের বাক্য বিন্যাস এবং মিছিলের স্লোগান এখন শহরের দেয়ালে দেয়ালে আর মানুষের মনের খেয়ালে খেয়ালে। বাংলাদেশের ইতিহাস ঘেঁটে দেখা যায়, এই মুল্লুকে যে কয়টি গণঅভ্যুত্থান হয়েছে; প্রায় সবকটিতেই ছাত্র-জনতার অংশগ্রহণের প্রভাব ছিল সুদূরপ্রসারী। বেশিরভাগ অভ্যুত্থানের শুরুতে ছাত্রদের শান্তিপূর্ণ দাবিকে শাসকরা তোয়াক্কা না করা ডেকে নিয়েছে তাদের পতন, আর জন্ম নিয়েছে ইতিহাসের নতুন নতুন অধ্যায়।
                        </p>

                        <p class="" style="text-align: justify">
                            ইতিহাসের এই সন্ধিক্ষণে রাজনৈতিক পট পরিবর্তন খুবই স্বাভাবিক ও প্রাসঙ্গিক। এমতাবস্থায় প্রতিশ্রুতিশীল ও দেশপ্রেমী জনতা, প্রবাসী ও তারুণ্যের সমন্বয়ে গঠিত নতুন ধারার রাজনৈতিক সংগঠন হিসেবে আত্মপ্রকাশ করা এবং দেশের উন্নয়নের লক্ষ্যে সংস্কার কার্যক্রম জারী রাখাটা সময়ের দাবী। এই লক্ষ্যে আমাদের নানাবিধ কার্যক্রম ও পরিকল্পনার সমন্বিত অবস্থার রূপায়নই হলো <span style="color:red; font-weight:bold"> “জাগো জনতা”</span>।
                        </p>

                        <p class="" style="text-align: justify">
                           <span style="color:red; font-weight:bold"> “জাগো জনতা”</span> ছড়িয়ে যাবে দেশের প্রতিটি অঞ্চলে, শহর থেকে গ্রামে, গ্রাম থেকে আবাল-বৃদ্ধ-বনিতার কাছে। আমরা জেলা শহর, দেশের সরকারি-বেসরকারি বিশ্ববিদ্যালয়, বাংলাদেশী প্রবাসীবহুল দেশসমূহ এবং সমাজের বিভিন্ন পেশা থেকে প্রতিনিধির সমন্বয়ে সুনির্দিষ্ট সংস্কার প্রস্তাবনা নিয়ে অন্তর্বর্তীকালীন সরকারের হাতকে শক্তিশালী করার মাধ্যমে ন্যায্য সংস্কার সম্পাদনের দাবী আদায়ে কাজ করবো। আমরা এই বিপ্লব এবং বিপ্লবের আবু সাঈদ ও মুগ্ধদের অমর করে রাখতে চাই। তাই আমরা আগামী নির্বাচনে ভোটাধিকার নিশ্চিতে মাধ্যমে এবং নেতৃত্বের অবারিত সুযোগ তৈরির মাধ্যমে দেশের রাজনীতিতে তারুণ্যের এই প্রজন্মের অংশ গ্রহণ নিশ্চিতে আমরা প্রতিশ্রুতিবদ্ধ।
                        </p>
                    </div>
                    <div>
                        <p class="" style="text-align: justify">
                           <span style="font-weight: bold; color:rgb(172, 175, 1)"> ‘দেশটা কারোরই বাপের না’</span> – তরুণ-জনতার এই স্লোগানকে ধারণ করে বিগত দিনের খাই খাই রাজনীতিতে যারা হালুয়া-রুটি ভাগাভাগিতে ছিলেন তাদের বিপক্ষে হবে সৎ, পরিশ্রমী ও দেশপ্রেমিক প্রবাসী এবং ছাত্র-জনতার অবস্থান। কালোর বিপক্ষে প্রতিষ্ঠিত হবে আলোর মিছিল। বিগত দিনের মত বিভিন্ন দেশের মদদপুষ্ট এবং বিভিন্ন দেশপন্থী রাজনৈতিক দলকে বয়কট করার সময় এখুনি। নতুন ধারার রাজনৈতিক আদর্শ হবে শুধুমাত্র বাংলাদেশপন্থী, আদর্শ হবে সাচ্চা ‘বাংলাদেশি জাতীয়তাবাদ’।

                        </p>
                    </div>
                    <div>
                        <p class="" style="text-align: justify">
                            স্বাধীনতার ৫০ বছর পেরিয়ে গেলেও গণতন্ত্র মুক্তি পায়নি। প্রতিটি সরকারই সাধারণ মানুষের টুটি চেপে ধরেছে। প্রবাসী, ছাত্র ও আম-জনতার অধিকার হয়েছে ভূলুণ্ঠিত। এমতাবস্থায় দেশের পরিচালনা যন্ত্রের সংস্কার আবশ্যক। নির্মম হলেও সত্য যে, আমাদের মত নতুন সংস্কার ডাকের প্ল্যাটফর্মের জন্য রাষ্ট্রের সার্বিক সংস্কারের সাথে ওতপ্রোতভাবে যুক্ত হ‌ওয়া কষ্টসাধ্য। এই মর্মে, আমরা রাষ্ট্রের ছয়টি খাতের সংস্কার নিয়ে ওতপ্রোতভাবে কাজ করে যেতে চাই। রাষ্ট্রের সকল অংশীদারদের সাথে এক হয়ে কাঁধে কাঁধ মিলিয়ে নিম্নের ছয়টি ক্ষেত্রে ৩৬০° সংস্কারের ডাক দিচ্ছি।


                        </p>
                    </div>



                 </div>
             </div>
         </div>
     </div>
 </section>


 <style>

.separetion-text span{
        font-family: 'myfont';
        color: #f5f5f5;
        font-weight: bold;
        font-size: 2em;
        display: block;
        word-spacing: 1rem;
        text-align: center;
    }

 </style>

 <section>
    <div class="separetion-text" style="background: green;">
        <span class="py-3" style="">সবার উপরে দেশ এক বাংলাদেশ </span>
    </div>
 </section>


      <style>
        .deg-card{
            width:25rem;
        }
        /* Mobile first styling */
#songsker-khetro .deg-card img {
    width: 3rem; /* Make images smaller on mobile */
}

#songsker-khetro .deg-card p {
    padding: 2rem 1rem; /* Reduce padding */
}

.margin-top{
    margin-top: 40px;
}

/* Media query for mobile devices */
@media (max-width: 768px) {
    #songsker-khetro .container {
        padding: 1.5rem 1rem; /* Reduce overall container padding */
    }

    #songsker-khetro .common-section-title {
        font-size: 1.5rem; /* Reduce title font size */
    }

    #songsker-khetro .deg-card {
        width: 90%; /* Ensure the cards take up more space on small screens */
        margin-bottom: 20px; /* Add spacing between the cards */
    }


    /* Stack cards vertically */
    #songsker-khetro .row > .col-md-6 {
        margin-top:20px;
        display: block;
        width: 100%;
    }

    /* Center the cards */
    #songsker-khetro .deg-card {
        margin: 0 auto;
    }
    .margin-top{
    margin-top: 0px;
}
}

      </style>

      <section id="songsker-khetro">
        <div class="360-area " style="    background: #c1ddc7;">
            <div class="container py-5">

                <div class="row">
                    <div class="heading-deg  text-center" >
                        <h2 style="" class="common-section-title"> ৩৬০° সংস্কারের
                             ক্ষেত্রসমূহ
                            </h2>
                    </div>
                </div>

                <div class="row margin-top" style="">
                    <div class="col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center pt-4" style="">
                            <img src="{{asset('uploads-image/360/1.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 "> প্রবাসীদের অধিকার
                                ও মর্যাদা প্রতিষ্ঠা

                         </div>
                    </div>
                    <div class=" col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center pt-4" style="" >
                            <img src="{{asset('uploads-image/360/2.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 ">প্রতিবেশী রাষ্ট্রের আধিপত্যবাদ রোধে
                                প্রতিটি ক্ষেত্রে সমানুপাতিক সম্পর্ক স্থাপন
                         </div>
                    </div>
                </div>
                <div class="row margin-top" style="">
                    <div class=" col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center  pt-4" style="">
                            <img src="{{asset('uploads-image/360/3.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 ">৪র্থ শিল্প বিপ্লবে তারুণ্যের
                                সম্পৃক্ততা নিশ্চিত করণ
                         </div>
                    </div>
                    <div class=" col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center  pt-4" style="" >
                            <img src="{{asset('uploads-image/360/4.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 ">ব্লু ইকোনোমি বা সুনীল অর্থনীতিতে অংশিদারিত্ব নিশ্চিতে রাষ্ট্রের আন্তর্জাতিক যোগাযোগ স্থাপন

                         </div>
                    </div>
                </div>
                <div class="row margin-top" style="">
                    <div class=" col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center pt-4" style="">
                            <img src="{{asset('uploads-image/360/5.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 ">জুলুমের শিকার সশস্ত্র বাহিনী, পুলিশ, প্রশাসনিক কর্মকর্তা ও আইনজীবিদের ন্যায্যতা নিশ্চিত করণ

                         </div>
                    </div>
                    <div class=" col-md-6 gap d-flex justify-content-center">
                       <div class="  card deg-card d-flex justify-content-center flex-column align-items-center pt-4" style="">
                            <img src="{{asset('uploads-image/360/6.png')}}" style="width:5rem;" alt="">
                            <p class="mb-0 py-5 px-4 ">মাদরাসা ও মসজিদ সংশ্লিষ্ট সকল পেশাজীবীর অধিকার নিশ্চিত করণ ও উপযুক্ত সংস্কারের মাধ্যমে বৃহত্তর কল্যান সাধন

                         </div>
                    </div>

                </div>



                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="separetion-text" style="background: rgb(255, 0, 0);">
            <span class="py-3" style=""> জেগে উঠুন !  </span>
        </div>
     </section>


    @include('front-end.pages.home.components.fancy_button')

    @include('front-end.pages.home.components.dofa')
    {{-- @include('front-end.pages.home.components.roadmap') --}}



   {{-- 350 sec end  --}}


   {{-- @include('front-end/pages.home.components.notice') --}}

    <!-- Forms Start -->
    {{-- @include('front-end.pages.home.components.pdfForm') --}}
    <!-- Forms End -->

    <!-- Our Programs Start -->
    {{-- @include('front-end.pages.home.components.programs') --}}
    <!-- Our Programs End -->

    <!-- News Start -->
    {{-- @include('front-end.pages.home.components.news') --}}
    <!-- News End -->

    <!-- Our Videos Start -->
    {{-- @include('front-end.pages.home.components.video') --}}
    <!-- Our Videos End -->

    <!-- Party Start -->
    {{-- @include('front-end.pages.home.components.party') --}}
    <!-- party End -->

    <!-- Contact Start -->
    @include('front-end.pages.home.components.contact')
    <!-- Contact End -->
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#home").addClass('active');
        });
    </script>
@endsection
