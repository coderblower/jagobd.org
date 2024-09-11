@extends('back-end.layouts.master')
@section('title', 'Course Details')
@section('content-header')
    <div class="row mb-2 px-2">
        <div class="col-sm-6">
            <h1 class="m-0">Course Details</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Courses</li>
            </ol>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>{{ $course->title }}</h3>
            <p>{{ $course->description }}</p>
            <p><strong>Instructor:</strong> {{ $course->instructor->name }}</p>
            <p><strong>Duration:</strong> {{ $course->duration }} minutes</p>
            <p><strong>Level:</strong> {{ ucfirst($course->level) }}</p>
            <p><strong>Price:</strong> ${{ $course->price }}</p>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $("#side-courses").addClass('active');
        });
    </script>
@endsection
