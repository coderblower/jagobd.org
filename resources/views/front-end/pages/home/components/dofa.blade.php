

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

.dofa {position: relative;}
.dofa::after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top:0;
    /* z-index: 2; */
  background:rgb(100 100 100 / 94%);
};

.dofa-rofa{
    position: relative;
    z-index: 999;
}

.dofa span {
    color: rgb(255 255 255);
    font-weight: bold;
    font-family: 'myfont';
}

.card-1{
    background: #ffff86;
}
.card-2 {
    background:#31c9e9
}
</style>

<section class="dofa" style="background:url('{{asset('frontend/img/dofa-bg.png')}}')">

<div class="dofa-rofa container-fluid" style="position: relative; z-index:1">

    <div class="row">
        <div class="col-auto mx-auto">
            <h2 class="text-center common-section-title py-5" style="color:rgb(255, 255, 255)">  জাগো জনতার দফাসমূহ</h2>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <!-- First row of 3 cards -->
        <div class="col-auto">
            <div class=" custom-card card-1">
                <div class="d-flex justify-content-center flex-column  align-items-center">
                <img src="{{asset('frontend/img/dofa-img-1.png')}}" style="width:49%" alt="">
                <h3>প্রবাসীদের অধিকার সংস্কারে</h3>
                <span>১৭ দফা</span></div>
            </div>
        </div>
        <div class="col-auto">
            <div class="custom-card card-2">
                <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="{{asset('frontend/img/dofa-img-2.png')}}" style="width:45%" alt="">
                <h3>ভারতের সাথে সম্পর্কের পুনঃবিন্যাস ও সংস্কারে</h3>
                <span>১২ দফা</span></div>
            </div>
        </div>
        <div class="col-auto">
            <div class="custom-card card-1">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('frontend/img/dofa-img-3.png')}}" style="width:70%" alt="">
                    <h3>৪র্থ শিল্প বিপ্লবে বাংলাদেশের অংশগ্রহণ ও এগিয়ে যাওয়ার</h3>
                    <span>১১ দফা</span></div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center  pb-5">
        <!-- Second row of 3 cards -->
        <div class="col-auto">
            <div class="custom-card card-2">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('frontend/img/dofa-img-4.png')}}" style="width:65%" alt="">
                <h3>ব্লু ইকোনোমি সুনীল অর্থনীতিতে বাংলাদেশের সম্পৃক্ততা নিশ্চিতে</h3>
                <span>১০ দফা</span></div></div>
        </div>
        <div class="col-auto">
            <div class="custom-card card-1">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('frontend/img/dofa-img-5.png')}}" style="width:70%" alt="">
                    <h3>জুলুমের শিকার সশস্ত্র বাহিনী, পুলিশ, প্রশাসনিক কর্মকর্তা ও আইনজীবিদের ন্যায্যতা নিশ্চিতে</h3>
                    <span>৭ দফা</span></div>
            </div>
        </div>
        <div class="col-auto">
            <div class="custom-card card-2">
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{asset('frontend/img/dofa-img-6.png')}}" style="width:66%" alt="">
                    <h3>মাদরাসা ও মসজিদ সংশ্লিষ্ট সকল পেশাজীবীর অধিকার নিশ্চিত করণ ও উপযুক্ত সংস্কারে</h3>
                    <span>১২ দফা</span></div>
            </div>
        </div>
    </div>
</div>

</section>
