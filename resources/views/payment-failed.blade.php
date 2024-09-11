@extends('front-end.layouts.master')

@section('title', 'Payment Failed')

@section('content')
<br>
<br>
<br>
    <div class="container mt-5">
        <div class="alert alert-danger text-center">
            <h1>Payment Failed</h1>
            <p>Unfortunately, there was an issue processing your payment. Please try again later or contact support if the issue persists.</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Return to Home</a>
            <a href="{{ route('retry-payment') }}" class="btn btn-secondary">Retry Payment</a>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#payment-failed").addClass('active');
        });
    </script>
@endsection
