

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

.signle-dofa{
    transition: all .3s ease;
}
.signle-dofa:hover {
    transform: scale(1.1)
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

<section id="" class="dofa" style="background:url('{{asset('frontend/img/dofa-bg.png')}}')">

<div class="dofa-rofa container-fluid" style="position: relative; z-index:1">

    <div class="row">
        <div class="col-auto mx-auto">
            <h2 class="text-center common-section-title py-5" style="color:rgb(255, 255, 255)">  জাগো জনতার দফাসমূহ</h2>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <!-- First row of 3 cards -->


        @foreach ($dofa as $key=>$item )

                <div class="col-auto signle-dofa">
                    <div class="custom-card card-2">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <a href="{{route('dofa.details', $item->id)}}">
                                <img src="{{asset($item['image-mini'])}}" style="width:{{$item->dofa_style}}%" alt="">
                                <h3>{{$item->title}}</h3>
                                <span>{{$item->dofa_count}} দফা</span>
                            </a>
                        </div>
                    </div>
                </div>


        @endforeach


    </div>
</div>

</section>
