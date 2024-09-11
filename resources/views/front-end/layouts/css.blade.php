<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->

<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Template Stylesheet -->
<link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
<style>
    html, body {
    max-width: 100%;
    overflow-x: hidden;
}
   /* .team-carousel > .owl-item { width:80px !important  } */
    .switch {
        position: relative;
        display: inline-block;
        margin: auto;
        margin-left: 8px;
    }

    .switch>span {
        position: absolute;
        top: 10px;
        pointer-events: none;
        font-family: 'Helvetica', Arial, sans-serif;
        font-weight: bold;
        font-size: 12px;
        text-transform: uppercase;
        text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
        width: 50%;
        text-align: center;
    }

    input.check-toggle-round-flat:checked~.off {
        color: #e82629;
    }

    input.check-toggle-round-flat:checked~.on {
        color: #fff;
    }

    .switch>span.on {
        left: 0;
        padding-left: 2px;
        color: #e82629;
    }

    .switch>span.off {
        right: 0;
        padding-right: 4px;
        color: #fff;
    }

    .check-toggle {
        position: absolute;
        margin-left: -9999px;
        visibility: hidden;
    }

    .check-toggle+label {
        display: block;
        position: relative;
        cursor: pointer;
        outline: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    input.check-toggle-round-flat+label {
        padding: 2px;
        width: 97px;
        height: 35px;
        background-color: #e82629;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 5px;
    }

    input.check-toggle-round-flat+label:before,
    input.check-toggle-round-flat+label:after {
        display: block;
        position: absolute;
        content: "";
    }

    input.check-toggle-round-flat+label:before {
        top: 2px;
        left: 2px;
        bottom: 2px;
        right: 2px;
        background-color: #e82629;
        -webkit-border-radius: 60px;
        -moz-border-radius: 60px;
        -ms-border-radius: 60px;
        -o-border-radius: 60px;
        border-radius: 60px;
    }

    input.check-toggle-round-flat+label:after {
        top: 4px;
        left: 4px;
        bottom: 4px;
        width: 48px;
        background-color: #fff;
        -webkit-border-radius: 52px;
        -moz-border-radius: 52px;
        -ms-border-radius: 52px;
        -o-border-radius: 52px;
        border-radius: 5px;
        -webkit-transition: margin 0.2s;
        -moz-transition: margin 0.2s;
        -o-transition: margin 0.2s;
        transition: margin 0.2s;
    }

    input.check-toggle-round-flat:checked+label:after {
        margin-left: 44px;
    }

    #toast-container{
        top: 100px
    }
</style>
