<style>
    .join {
        text-align: center;
    }
    .join::after{
        content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgb(183 171 113 / 70%); /* This adds a dark overlay to make text more readable */
    z-index: 1;
    }

    .fancy:hover{
        transform: scale(1.09)
    }

    .fancy {
    --offset: 6px;
    background: rgb(255, 0, 0);
    border-radius: 0px;
    position: relative;
    min-height: 80px;
    width: 300px;
    max-width: 100%;
    overflow: hidden;
    transition: all .2s ease-out;
    margin-bottom: 40px;
}

/* Conic gradient */
.fancy::before {
    content: '';
    background: conic-gradient(transparent 270deg, rgb(192, 131, 0), transparent);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    aspect-ratio: 1;
    width: 100%;
    animation: rotate 2s linear infinite;
}

/* Overlay */
.fancy::after {
    content: '';
    background: inherit;
    border-radius: inherit;
    position: absolute;
    inset: var(--offset);
    height: calc(100% - 2 * var(--offset));
    width: calc(100% - 2 * var(--offset));
}

.fancy input {
    background: transparent;
    color: rgb(255, 255, 255);
    font-size: 1.9rem;
    font-weight: bold;
    position: absolute;
    inset: 0;
    z-index: 8;
    padding: 1.5rem;
    border: none;
}

@keyframes rotate {
    from {
        transform: translate(-50%, -50%) scale(3.4) rotate(0turn);
    }

    to {
        transform: translate(-50%, -50%) scale(3.4) rotate(1turn);
    }
}


.form-control{
    padding: .8rem .75rem;
}

.join-us::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgb(0 0 255/ 70%);
    /* z-index: 8888; */
}

.join-us-content{
    position: relative;
    z-index: 1;
}
   </style>


   <div class="join-us" id="join-us" style="position: relative;">
    <div class="container-fluid " style="min-height: 400px;background:#e82629; display:flex;   justify-content: center; align-items: center; background-image: url('{{ asset('frontend/img/join_1.webp') }}'); background-size: cover; background-attachment: fixed; ">
        <div class="row">
            <div class="container join-us-content">
                <div class="row mb-2 mt-4">
                    <h2 style="text-align: center; color:rgb(255, 251, 13); font-weight:bold" class=""> সংস্কার বাস্তবায়নে যোগ দিন </h2>
                </div>
                <div class="row">
                   <div class="col-md-12 mx-auto">
                    <form action="primary-member" method="post" >

                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <div class="row">
                            <div class="col">
                                <div class="form-outline">
                                  <input type="text" id="form6Example1" placeholder="আবেদনকারীর নাম" name='name' class="form-control"  />
                                  <label class="form-label" for="form6Example1"></label>
                                </div>
                              </div>
                        </div>



                        <div class="row mb-2">

                            <!-- Text input -->


                            <div class="col form-outline">

                                <input type="text"  id="" placeholder="ঠিকানা বর্তমান" name="present_address" class="form-control" />

                            </div>
                        </div>

                        <div class="row mb-2">

                            <!-- Text input -->


                            <div class="col form-outline">

                                <input type="text"  id="" placeholder="স্থায়ী বর্তমান" name="parmanent_address" class="form-control" />

                            </div>

                        </div>

                        <div class="row mb-2">

                            <!-- Text input -->




                            <div class="col form-outline">

                                <input type="text"  id="" placeholder="পেশা" name="work" class="form-control" />

                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col form-outline">

                                <input type="number"  id="" placeholder="মোবাইল নং " name="mobile" class="form-control" />

                            </div>

                            <div class="col form-outline">

                                <input type="text"  id="" placeholder="ইমেল" name="email" class="form-control" />

                            </div>
                        </div>

                        <!-- Submit button -->

                        @csrf
                      </form>
                    </div>


                </div>
                <div class="fancy mx-auto" style="  ">

                    <form action="/primary-member">
                        <input type="submit" value="যোগ দিন ">
                    </form>
                   </div>
            </div>

        </div>
    </div>
   </div>
