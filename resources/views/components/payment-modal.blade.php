<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
{{--
    <div id="" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        Hello world
    </div> --}}


     <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">অনুদানের তথ্য </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" class="needs-validation" action="{{route('pay_stripe')}}" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">

                        <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Full Name "
                               required>
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="Mobile No"
                               value="" required>
                        <div class="invalid-feedback" style="width: 100%;">
                            Your Mobile number is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">

                    <input type="email" name="customer_email" class="form-control" id="email"
                           placeholder="you@example.com" value="" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>




                <div class="mb-3">

                    <input type="number" name="customer_amount" class="form-control" id="ammount" placeholder="Please Enter Amount">
                </div>


                <hr class="mb-4">
                <input type="submit" class="btn btn-primary btn-lg btn-block" id="stripePayBtn" value="Pay now"/>
            </form>
        </div>

      </div>
    </div>
  </div>

</div>
