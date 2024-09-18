
<style>

    #roadmap-heading{
        position: relative;
    }

    #roadmap-heading::after{
        content: "";
        top:0;
        left:0;
        position:absolute;
        width:100px;
        height:15px;
        background: green;

    }
    #roadmap-heading::before{
        content: "";
        bottom:0;
        right:0;
        position:absolute;
        width:100px;
        height:15px;
        background: green;

    }
</style>

<section>
    <div class="road-map">
        <div class="">
            <div class="row">
                <div class="d-flex justify-content-center item-center py-5 " style=" width:100%; background:#F0F2F5" >
                    <h2 class="common-section-title" id="roadmap-heading" style="">
                        {{app()->getLocale() == 'bn'? 'জাগো জনতার রোডম্যাপ' : 'Short History of BNM'}}
                   </h2>
                </div>
                <section style="background-color: #F0F2F5;">
                    <div class="container py-5">
                      <div class="main-timeline">
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                              <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">জাগো জনতার অভ্যুদয়
                            </h5>
                            <p>৩০ সেপ্টেম্বর, ২০২৪ </p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                            <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">আগ্রহী প্রবাসী , জনতা ও ছাত্রদের যোগদান
                            </h5>
                            <p>১-১০ অক্টোবর, ২০২৪</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                                <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">সংবাদ সম্মেলন ও সংস্কার পরিকল্পনা
                                </h5>
                                <p>১০-১৫ অক্টোবর, ২০২৪</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                                <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">ত্রুটি-বিচ্যুতি নিয়ে হাইকোর্টে রিট আবেদন
                            </h5>
                            <p>১৬-২৫ অক্টোবর, ২০২৪</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline left">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                                <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">দেশব্যাপী মানববন্ধন
                            </h5>
                            <p>১ ডিসেম্বর, ২০২৪</p>
                            </div>
                          </div>
                        </div>
                        <div class="timeline right">
                          <div class="card">
                            <div class="card-body p-4 text-center">
                                <span><img class="py-3" src="{{asset('uploads-image/road/icon-1.png')}}" alt=""></span>
                              <h5 class="mb-0">লং মার্চ ফর বেটার বাংলাদেশ
                            </h5>
                            <p>৩১ ডিসেম্বর, ২০২৪</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</section>

<style>

        /* The actual timeline (the vertical ruler) */
.main-timeline {
position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline::after {
content: "";
position: absolute;
width: 15px;
background-color: #fff;
border-left:  5px solid red;
border-right:  5px solid green;
top: 0;
bottom: 0;
left: 50%;
margin-left: -3px;
}

/* Container around content */
.timeline {
position: relative;
background-color: inherit;
width: 50%;
}

/* The circles on the timeline */
.timeline::after {
content: "";
position: absolute;
width: 25px;
height: 25px;
right: -13px;
/* background-color: #939597; */
/* border: 5px solid #f5df4d; */
top: 15px;
border-radius: 50%;
z-index: 1;
}

/* Place the container to the left */
.left {
padding: 0px 40px 20px 0px;
left: 0;
}

/* Place the container to the right */
.right {
padding: 0px 0px 20px 40px;
left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
content: " ";
position: absolute;
top: 18px;
z-index: 1;
right: 30px;
border: medium solid white;
border-width: 10px 0 10px 10px;
border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
content: " ";
position: absolute;
top: 18px;
z-index: 1;
left: 30px;
border: medium solid white;
border-width: 10px 10px 10px 0;
border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
/* Place the timelime to the left */
.main-timeline::after {
left: 31px;
}

/* Full-width containers */
.timeline {
width: 100%;
padding-left: 70px;
padding-right: 25px;
}

/* Make sure that all arrows are pointing leftwards */
.timeline::before {
left: 60px;
border: medium solid white;
border-width: 10px 10px 10px 0;
border-color: transparent white transparent transparent;
}

/* Make sure all circles are at the same spot */
.left::after,
.right::after {
left: 18px;
}

.left::before {
right: auto;
}

/* Make all right containers behave like the left ones */
.right {
left: 0%;
}
}
</style>
