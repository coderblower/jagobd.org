@extends('back-end.layouts.master')
@section('title', 'Enrollment Details')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Enrollment Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Enrollments</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Enrollment ID: {{ $enrollment->id }}</h3>
            <p><strong>Course:</strong> {{ $enrollment->course->title }}</p>
            <p><strong>User:</strong> {{ $enrollment->user->name }}</p>
            <p><strong>Status:</strong> {{ ucfirst($enrollment->status) }}</p>
            <p><strong>Enrollment Date:</strong> {{ $enrollment->enrollment_date->format('Y-m-d') }}</p>
            <a href="{{ route('enrollments.index') }}" class="btn btn-secondary">Back to Enrollments</a>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-enrollments").addClass('active');
        });
    </script>
@endsection
