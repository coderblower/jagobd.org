<!-- JavaScript Libraries -->
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('backend/plugins/toastr/toastr.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Handle dropdown change
        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });

        // Handle toggle switch change
        $('#language-toggle').change(function() {
            var lang = $(this).is(':checked') ? 'en' : 'bn';
            window.location.href = url + "?lang=" + lang;
        });
    });
</script>

<script>

    @if(Session::has('success'))

    toastr.success("{{ Session::get('success') }}");

    @endif



    @if(Session::has('info'))

    toastr.info("{{ Session::get('info') }}");

    @endif



    @if(Session::has('warning'))

    toastr.warning("{{ Session::get('warning') }}");

    @endif



    @if(Session::has('error'))

    toastr.error("{{ Session::get('error') }}");

    @endif


</script>
