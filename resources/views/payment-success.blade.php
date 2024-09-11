@extends('front-end.layouts.master')

@section('title', 'Payment Success')

@section('content')
<br>
<br>
<br>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h1>Payment Successful!</h1>
            <p>Your payment has been processed successfully. Thank you for your purchase!</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Return to Home</a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#payment-success").addClass('active');
        });
    </script>
@endsection
